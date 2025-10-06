<!-- Modal Overlay -->
<div id="transactionModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
  <!-- Modal Box -->
  <div class="bg-white w-full max-w-md rounded-lg shadow-lg p-6 relative">
    <!-- Close Button -->
    <button onclick="closeModal()" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700 text-xl">&times;</button>

    <!-- Modal Title -->
    <h2 class="text-lg font-semibold mb-4 flex items-center gap-2">
      ➕ Add New Transaction
    </h2>

    <!-- Form -->
   <form action="save-transaction.php" method="POST">




      <!-- Type -->
      <div>
        <label class="block text-sm font-medium text-gray-700">Transaction Type</label>
        <select name="type" class="w-full mt-1 border rounded px-3 py-2">
          <option value="expense">Expense</option>
          <option value="income">Income</option>
        </select>
      </div>

      <!-- Amount -->
      <div>
        <label class="block text-sm font-medium text-gray-700">Amount ($)</label>
        <input type="number" step="0.01" name="amount" value="0.00" class="w-full mt-1 border rounded px-3 py-2" required>
      </div>

      <!-- Description -->
      <div>
        <label class="block text-sm font-medium text-gray-700">Description</label>
        <input type="text" name="description" placeholder="Enter transaction description" class="w-full mt-1 border rounded px-3 py-2">
      </div>

      <!-- Category -->
      <div>
        <label class="block text-sm font-medium text-gray-700">Category</label>
        <select name="category" class="w-full mt-1 border rounded px-3 py-2">
          <option value="">Select category</option>
          <option value="Food">Food</option>
          <option value="Rent">Rent</option>
          <option value="Utilities">Utilities</option>
          <option value="Freelance">Freelance</option>
          <option value="Salary">Salary</option>
          <option value="Others">Others</option>
          
        
          <!-- Add more as needed -->
        </select>
      </div>

      <!-- Date -->
      <div>
        <label class="block text-sm font-medium text-gray-700">Date</label>
        <input type="date" name="date" value="<?= date('Y-m-d') ?>" class="w-full mt-1 border rounded px-3 py-2">
      </div>

      <!-- Submit -->
      <div class="pt-2">
        <button type="submit" class="w-full bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
          Add Transaction
        </button>
      </div>
    </form>
  </div>
</div>
