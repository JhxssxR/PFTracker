<?php
session_start();
require_once 'config.php';

// Look for existing demo user
$stmt = $pdo->prepare("SELECT id, name FROM users WHERE email = 'demo@pftracker.com'");
$stmt->execute();
$demoUser = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$demoUser) {
  // Create demo user if not found
  $hash = password_hash('demo123', PASSWORD_DEFAULT);
  $stmt = $pdo->prepare("INSERT INTO users (name, email, password, created_at) VALUES ('Demo User', 'demo@pftracker.com', ?, NOW())");
  $stmt->execute([$hash]);
  $demoUserId = $pdo->lastInsertId();
  $_SESSION['user_id'] = $demoUserId;
  $_SESSION['user_name'] = 'Demo User';
} else {
  $_SESSION['user_id'] = $demoUser['id'];
  $_SESSION['user_name'] = $demoUser['name'];
}

// Redirect to dashboard
header('Location: pages/dashboard.php');
exit;






