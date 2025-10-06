<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Budget Management</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">

  <div class="max-w-7xl mx-auto p-6 space-y-6">

    <?php include 'components/budgets-header.php'; ?>

    <!-- Summary Cards with Icons -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
      <div class="bg-blue-100 p-4 rounded shadow flex items-center justify-between">
        <div>
          <h2 class="text-lg font-semibold">Total Budget</h2>
          <p class="text-2xl font-bold text-blue-700">$0.00</p>
        </div>
      </div>
      <div class="bg-red-100 p-4 rounded shadow flex items-center justify-between">
        <div>
          <h2 class="text-lg font-semibold">Total Spent</h2>
          <p class="text-2xl font-bold text-red-700">$0.00</p>
        </div>
        <div class="text-red-600 text-3xl">⬆️</div>
      </div>
      <div class="bg-green-100 p-4 rounded shadow flex items-center justify-between">
        <div>
          <h2 class="text-lg font-semibold">Remaining</h2>
          <p class="text-2xl font-bold text-green-700">$0.00</p>
        </div>
        <div class="text-green-600 text-3xl">💵</div>
      </div>
    </div>

    <!-- Charts Section -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
      <div class="bg-white p-6 rounded shadow text-center">
        <h3 class="text-lg font-semibold mb-2">Budget vs Spending</h3>
        <div class="h-40 bg-gray-200 rounded">[Graph Placeholder]</div>
      </div>
      <div class="bg-white p-6 rounded shadow text-center">
        <h3 class="text-lg font-semibold mb-2">Budget Allocation</h3>
        <div class="h-40 bg-gray-200 rounded">[Chart Placeholder]</div>
      </div>
    </div>

    <!-- Budget Categories -->
    <div class="bg-white p-6 rounded shadow">
      <h3 class="text-lg font-semibold mb-2">Budget Categories</h3>
      <p class="text-gray-500">No categories added yet.</p>
    </div>

    <!-- Quick Actions -->
    <div class="flex flex-wrap gap-4">
      <button class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">Add Budget Category</button>
      <button class="bg-gray-600 text-white px-4 py-2 rounded hover:bg-gray-700">Budget Settings</button>
      <button class="bg-teal-600 text-white px-4 py-2 rounded hover:bg-teal-700">Monthly Review</button>
    </div>

  </div>

</body>
</html>
