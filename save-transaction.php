<?php
session_start();

// Database configuration
$host     = 'localhost';
$db       = 'pftracker';
$user     = 'root';
$pass     = '';
$charset  = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
  PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
  $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
  die("❌ Database connection failed: " . $e->getMessage());
}

// Sanitize and validate input
$type        = $_POST['type'] ?? '';
$amount      = isset($_POST['amount']) ? floatval($_POST['amount']) : 0;
$description = trim($_POST['description'] ?? '');
$category    = $_POST['category'] ?? '';
$date        = $_POST['date'] ?? date('Y-m-d');

// Basic validation
if (!$type || !$amount || !$category) {
  header("Location: /PFTracker/pages/transactions.php?error=missing");
  exit;
}

// Insert transaction
$sql = "INSERT INTO transactions (type, amount, description, category, date) 
        VALUES (:type, :amount, :description, :category, :date)";
$stmt = $pdo->prepare($sql);
$stmt->execute([
  ':type'        => $type,
  ':amount'      => $amount,
  ':description' => $description,
  ':category'    => $category,
  ':date'        => $date,
]);

// Redirect to transactions page with success flag
header("Location: ../PFTracker/?page=transactions");
exit;
