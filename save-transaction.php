<?php
// Start session if needed
session_start();

// DB connection (adjust credentials)
$host = 'localhost';
$db   = 'pftracker';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
  PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
  $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
  die("Database connection failed: " . $e->getMessage());
}

// Validate and sanitize input
$type        = $_POST['type'] ?? '';
$amount      = floatval($_POST['amount'] ?? 0);
$description = trim($_POST['description'] ?? '');
$category    = $_POST['category'] ?? '';
$date        = $_POST['date'] ?? date('Y-m-d');

// Basic validation
if (!$type || !$amount || !$category) {
  die("Missing required fields.");
}

// Insert into database
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

// Redirect back to transactions page
header("Location: transactions.php?success=1");
exit;
