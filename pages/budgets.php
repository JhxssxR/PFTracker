<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Budget Management</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">

  <div class="max-w-7xl mx-auto  pt-8 space-y-8">

    <!-- Header -->
    <div class="flex justify-between items-start">
      <div class="space-y-1">
        <h1 class="text-3xl font-bold text-gray-800">Budget Management</h1>
        <p class="text-sm text-gray-500">Track and manage your spending limits</p>
      </div>
      <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 flex items-center gap-2">
        ➕ Add Budget
      </button>
    </div>

    <!-- Summary Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
      <div class="bg-blue-100 p-4 rounded shadow flex items-center justify-between">
        <div>
          <h2 class="text-lg font-semibold text-blue-700">Total Budget</h2>
          <p class="text-2xl font-bold text-blue-700">$0.00</p>
        </div>
        <div class="text-blue-700 text-3xl">🎯</div>
      </div>
      <div class="bg-red-100 p-4 rounded shadow flex items-center justify-between">
        <div>
          <h2 class="text-lg font-semibold text-red-700">Total Spent</h2>
          <p class="text-2xl font-bold text-red-700">$0.00</p>
        </div>
        <div class="text-red-700 text-3xl">⬆️</div>
      </div>
      <div class="bg-green-100 p-4 rounded shadow flex items-center justify-between">
        <div>
          <h2 class="text-lg font-semibold text-green-700">Remaining</h2>
          <p class="text-2xl font-bold text-green-700">$0.00</p>
        </div>
        <div class="text-green-700 text-3xl">💵</div>
      </div>
    </div>

    <!-- Charts Section -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
      <div class="bg-white p-6 rounded shadow">
        <div class="flex items-center gap-2 mb-2">
          <span class="w-3 h-3 bg-blue-600 rounded-full"></span>
          <h3 class="text-lg font-semibold text-gray-700">Budget vs Spending</h3>
        </div>
        <div class="h-40 bg-gray-200 rounded">[Graph Placeholder]</div>
      </div>
      <div class="bg-white p-6 rounded shadow">
        <div class="flex items-center gap-2 mb-2">
          <span class="w-3 h-3 bg-purple-600 rounded-full"></span>
          <h3 class="text-lg font-semibold text-gray-700">Budget Allocation</h3>
        </div>
        <div class="h-40 bg-gray-200 rounded">[Chart Placeholder]</div>
      </div>
    </div>

    <!-- Budget Categories -->
    <div class="bg-white p-6 rounded shadow">
      <h3 class="text-lg font-semibold text-gray-700 mb-2">Budget Categories</h3>
      <p class="text-gray-500">No categories added yet.</p>
    </div>

    <!-- Quick Actions -->
    <!-- Quick Actions -->
<div class="bg-white p-6 rounded shadow">
  <h3 class="text-lg font-semibold text-gray-700 mb-4">Quick Actions</h3>
  <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 text-center">
    
    <!-- Add Budget Category -->
    <button class="border border-gray-300 rounded-lg p-4 hover:bg-gray-50 flex flex-col items-center justify-center">
      <div class="text-2xl mb-2">➕</div>
      <span class="text-sm font-medium text-gray-700">Add Budget Category</span>
    </button>

    <!-- Budget Settings -->
    <button class="border border-gray-300 rounded-lg p-4 hover:bg-gray-50 flex flex-col items-center justify-center">
      <div class="text-2xl mb-2">⚙️</div>
      <span class="text-sm font-medium text-gray-700">Budget Settings</span>
    </button>

    <!-- Monthly Review -->
    <button class="border border-gray-300 rounded-lg p-4 hover:bg-gray-50 flex flex-col items-center justify-center">
      <div class="text-2xl mb-2">📅</div>
      <span class="text-sm font-medium text-gray-700">Monthly Review</span>
    </button>

  </div>
</div>

