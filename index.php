<?php
$page = $_GET['page'] ?? 'dashboard';
$validPages = ['dashboard', 'transactions', 'analytics', 'budgets', 'settings'];
$currentPage = in_array($page, $validPages) ? $page : 'dashboard';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PFTracker Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-gray-50 text-gray-800">
  <div class="flex min-h-screen">
    <?php include 'components/sidebar.php'; ?>
    <div class="flex-1 p-6">
      <?php
        if ($currentPage === 'dashboard') {
          include 'components/dashboard-header.php';
        } elseif ($currentPage === 'transactions') {
          include 'components/transactions-header.php';
        }
      ?>
      <?php include "pages/$currentPage.php"; ?>
    </div>
  </div>
</body>
</html>
