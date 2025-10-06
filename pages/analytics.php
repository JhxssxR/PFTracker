<?php include 'components/analytics-header.php'; ?>

<!-- Summary Cards -->
<div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
  <div class="bg-green-100 p-4 rounded shadow">
    <p class="text-sm text-gray-600">Total Income</p>
    <p class="text-2xl font-bold text-green-700">$</p>
    <p class="text-xs text-green-600 mt-1">0 from last month</p>
  </div>
  <div class="bg-red-100 p-4 rounded shadow">
    <p class="text-sm text-gray-600">Total Expenses</p>
    <p class="text-2xl font-bold text-red-600">$</p>
    <p class="text-xs text-red-600 mt-1">0 from last month</p>
  </div>
  <div class="bg-blue-100 p-4 rounded shadow">
    <p class="text-sm text-gray-600">Net Savings</p>
    <p class="text-2xl font-bold text-blue-700">$</p>
  </div>
  <div class="bg-purple-100 p-4 rounded shadow">
    <p class="text-sm text-gray-600">Savings Rate</p>
    <p class="text-2xl font-bold text-purple-700">0</p>
    <p class="text-xs text-purple-600 mt-1">0</p>
  </div>
</div>

<!-- Financial Insights Chart Placeholder -->
<div class="bg-white p-6 rounded shadow mb-8">
  <h2 class="text-lg font-semibold mb-4">Financial Insights</h2>
  <div class="h-64 bg-gray-100 rounded flex items-center justify-center text-gray-500">
    [Chart Placeholder]
  </div>
</div>

<!-- Expense Categories & Goals -->
  <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
  <div class="bg-white p-6 rounded shadow flex flex-col items-center justify-center text-center text-gray-500">
    <h3 class="text-lg font-semibold mb-4 text-gray-800">Top Expense Categories</h3>
    <p class="text-sm">No expense data available yet.</p>
  </div>
  <div class="bg-white p-6 rounded shadow flex flex-col items-center justify-center text-center text-gray-500">
    <h3 class="text-lg font-semibold mb-4 text-gray-800">Financial Goals</h3>
    <p class="text-sm">No financial goals set yet.</p>
  </div>
</div>


<!-- Quick Actions -->
<div class="grid grid-cols-2 md:grid-cols-4 gap-4">
  <button class="bg-white p-4 rounded shadow hover:bg-gray-50 text-center text-sm font-medium text-gray-700">
    📤 Export Data
  </button>
  <button class="bg-white p-4 rounded shadow hover:bg-gray-50 text-center text-sm font-medium text-gray-700">
    📅 Monthly Report
  </button>
  <button class="bg-white p-4 rounded shadow hover:bg-gray-50 text-center text-sm font-medium text-gray-700">
    🎯 Set Goals
  </button>
  <button class="bg-white p-4 rounded shadow hover:bg-gray-50 text-center text-sm font-medium text-gray-700">
    📈 Custom Analysis
  </button>
</div>
