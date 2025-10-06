<?php


// Connect to DB first
$pdo = new PDO("mysql:host=localhost;dbname=pftracker;charset=utf8mb4", "root", "", [
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
]);

// Fetch transactions
$stmt = $pdo->query("SELECT * FROM transactions ORDER BY date DESC");
$transactions = $stmt->fetchAll();

// Show success message if redirected from save-transaction.php
$showSuccess = isset($_GET['success']) && $_GET['success'] == 1;
?>


<?php include(__DIR__ . '/../components/add-transaction-modal.php'); ?>




<!-- Success Message -->
<?php if ($showSuccess): ?>
  <div class="mb-4 p-3 bg-green-100 text-green-700 rounded shadow text-sm">
    ✅ Transaction added successfully!
  </div>
<?php endif; ?>

<!-- Error Message -->
<?php if (isset($_GET['error']) && $_GET['error'] === 'missing'): ?>
  <div class="mb-4 p-3 bg-red-100 text-red-700 rounded shadow text-sm">
    ⚠️ Please fill in all required fields.
  </div>
<?php endif; ?>

<!-- Summary Cards -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
  <div class="bg-green-100 p-4 rounded shadow">
    <p class="text-sm text-gray-600">Total Income</p>
    <p class="text-2xl font-bold text-green-700">$0</p>
  </div>
  <div class="bg-red-100 p-4 rounded shadow">
    <p class="text-sm text-gray-600">Total Expenses</p>
    <p class="text-2xl font-bold text-red-600">$0</p>
  </div>
  <div class="bg-blue-100 p-4 rounded shadow">
    <p class="text-sm text-gray-600">Net Income</p>
    <p class="text-2xl font-bold text-blue-700">$0</p>
  </div>
</div>

<!-- Filters & Search -->
<div class="bg-white p-4 rounded shadow mb-6">
  <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
    <input type="text" placeholder="Search transactions..." class="w-full md:w-1/3 border rounded px-3 py-2">
    <div class="flex gap-4">
      <select class="border rounded px-3 py-2">
        <option>All Types</option>
        <option>Income</option>
        <option>Expense</option>
      </select>
      <select class="border rounded px-3 py-2">
        <option>All Categories</option>
        <option>Bills & Utilities</option>
        <option>Food & Dining</option>
        <option>Transportation</option>
        <option>Freelance</option>
        <option>Salary</option>
      </select>
      <button class="px-4 py-2 border rounded text-gray-600 hover:bg-gray-100">Clear Filters</button>
    </div>
  </div>
  <p class="mt-2 text-sm text-gray-500"><?= count($transactions) ?> of <?= count($transactions) ?> transactions</p>
</div>

<!-- Transaction History -->
<div class="bg-white p-4 rounded shadow">
  <h2 class="text-lg font-semibold mb-4">Transaction History</h2>

  <?php if (count($transactions) > 0): ?>
    <ul class="space-y-4">
      <?php foreach ($transactions as $tx): ?>
        <li class="border-b pb-4">
          <div class="flex justify-between items-center">
            <div>
              <p class="font-semibold"><?= htmlspecialchars($tx['description']) ?></p>
              <p class="text-sm text-gray-500"><?= ucfirst($tx['type']) ?> • <?= htmlspecialchars($tx['category']) ?></p>
              <p class="text-sm text-gray-400"><?= date('F j, Y', strtotime($tx['date'])) ?></p>
            </div>
            <div class="text-right">
              <p class="text-lg font-bold <?= $tx['type'] === 'income' ? 'text-green-600' : 'text-red-600' ?>">
                <?= $tx['type'] === 'income' ? '+' : '-' ?>$<?= number_format($tx['amount'], 2) ?>
              </p>
            </div>
          </div>
        </li>
      <?php endforeach; ?>
    </ul>
  <?php else: ?>
    <p class="text-sm text-gray-500">No transactions found.</p>
  <?php endif; ?>
</div>

<!-- Modal Script -->
<script>
  function openModal() {
    document.getElementById('transactionModal').classList.remove('hidden');
  }
  function closeModal() {
    document.getElementById('transactionModal').classList.add('hidden');
  }
</script>
<script src="https://cdn.tailwindcss.com"></script>
