

<!-- Summary Cards -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
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
      </select>
      <button class="px-4 py-2 border rounded text-gray-600 hover:bg-gray-100">Clear Filters</button>
    </div>
  </div>
  <p class="mt-2 text-sm text-gray-500">0 of 0 transactions</p>
</div>


