<!-- Summary Cards -->
<div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-10">
  <div class="bg-green-100 p-4 rounded shadow">
    <p class="text-sm text-gray-600">Total Income</p>
    <p class="text-2xl font-bold text-green-700">$</p>
  </div>
  <div class="bg-red-100 p-4 rounded shadow">
    <p class="text-sm text-gray-600">Total Expenses</p>
    <p class="text-2xl font-bold text-red-600">$</p>
  </div>
  <div class="bg-blue-100 p-4 rounded shadow">
    <p class="text-sm text-gray-600">Net Income</p>
    <p class="text-2xl font-bold text-blue-700">$</p>
  </div>
  <div class="bg-purple-100 p-4 rounded shadow">
    <p class="text-sm text-gray-600">Savings Rate</p>
    <p class="text-2xl font-bold text-purple-700"></p>
  </div>
</div>

<!-- Charts -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10">
  <div class="bg-white p-4 rounded shadow">
    <h2 class="text-lg font-semibold mb-2">Expense Breakdown</h2>
    <canvas id="expenseChart"></canvas>
  </div>
  <div class="bg-white p-4 rounded shadow">
    <h2 class="text-lg font-semibold mb-2">Income vs Expenses</h2>
    <canvas id="incomeChart"></canvas>
  </div>
</div>

<!-- Quick Actions -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
  <button class="bg-white border px-4 py-3 rounded shadow hover:bg-gray-100 flex items-center gap-2">
    ➕ Add Transaction
  </button>
  <button class="bg-white border px-4 py-3 rounded shadow hover:bg-gray-100 flex items-center gap-2">
    👁 View All Transactions
  </button>
  <button class="bg-white border px-4 py-3 rounded shadow hover:bg-gray-100 flex items-center gap-2">
    📄 Monthly Report
  </button>
</div>

