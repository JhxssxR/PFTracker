<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Financial Reports Dashboard - Test</title>
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Chart.js CDN -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="bg-gray-50 text-gray-800 font-sans">
  <?php include 'components/reports-header.php'; ?>
  <!-- Temporarily removed PHP include for testing - add back later if no issues -->
  <div class="max-w-6xl mx-auto p-6 space-y-6">
    <!-- Summary Cards (unchanged) -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
      <!-- Total Income -->
      <div class="bg-green-50 border border-green-100 rounded-2xl p-5">
        <div class="flex items-center justify-between">
          <h2 class="text-green-700 font-semibold flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 17l6-6 4 4 8-8M14 7h7v7" />
            </svg>
            Total Income
          </h2>
        </div>
        <p class="text-3xl font-bold text-green-600 mt-2">$0</p>
        <p class="text-sm text-green-500 mt-1">+12% from last period</p>
      </div>

      <!-- Total Expenses -->
      <div class="bg-red-50 border border-red-100 rounded-2xl p-5">
        <div class="flex items-center justify-between">
          <h2 class="text-red-700 font-semibold flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7l6 6 4-4 8 8M14 17h7v-7" />
            </svg>
            Total Expenses
          </h2>
        </div>
        <p class="text-3xl font-bold text-red-600 mt-2">$0</p>
        <p class="text-sm text-red-500 mt-1">-5% from last period</p>
      </div>

      <!-- Net Income -->
      <div class="bg-blue-50 border border-blue-100 rounded-2xl p-5">
        <div class="flex items-center justify-between">
          <h2 class="text-blue-700 font-semibold flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8V4m0 12v4" />
            </svg>
            Net Income
          </h2>
        </div>
        <p class="text-3xl font-bold text-blue-600 mt-2">$0</p>
        <p class="text-sm text-blue-500 mt-1">Surplus</p>
      </div>

      <!-- Transactions -->
      <div class="bg-purple-50 border border-purple-100 rounded-2xl p-5">
        <div class="flex items-center justify-between">
          <h2 class="text-purple-700 font-semibold flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            Transactions
          </h2>
        </div>
        <p class="text-3xl font-bold text-purple-600 mt-2">0</p>
        <p class="text-sm text-purple-500 mt-1">Avg: $0</p>
      </div>
    </div>

    <!-- Tabs -->
    <div class="flex space-x-2 mt-4">
      <button id="tabOverview" class="tab-btn bg-white text-blue-600 border border-gray-200 rounded-full px-5 py-2 font-medium shadow">Overview</button>
      <button id="tabCategories" class="tab-btn text-gray-600 border border-gray-200 rounded-full px-5 py-2 font-medium">Categories</button>
      <button id="tabTrends" class="tab-btn text-gray-600 border border-gray-200 rounded-full px-5 py-2 font-medium">Trends</button>
      <button id="tabExport" class="tab-btn text-gray-600 border border-gray-200 rounded-full px-5 py-2 font-medium">Export</button>
    </div>

    <!-- Overview Content (Now with proper grid for side-by-side layout) -->
    <div id="contentOverview" class="grid grid-cols-1 lg:grid-cols-2 gap-4 mt-6">
      <!-- Chart -->
      <div class="bg-white rounded-2xl shadow p-5">
        <h3 class="text-lg font-semibold mb-2">Monthly Income vs Expenses</h3>
        <p class="text-gray-500 text-sm mb-3">Comparison of income and expenses over time</p>
        <canvas id="incomeExpenseChart" class="h-48"></canvas>
      </div>

      <!-- Financial Health -->
      <div class="bg-white rounded-2xl shadow p-5">
        <div class="flex items-center gap-2 mb-2">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13V3m0 0a9 9 0 100 18 9 9 0 000-18zM12 3v10l4 4" />
          </svg>
          <h3 class="text-lg font-semibold">Financial Health Score</h3>
        </div>
        <p class="text-gray-500 text-sm mb-3">Based on your spending patterns and savings rate</p>
        <div class="text-center my-4">
          <p class="text-4xl font-bold text-green-600">0%</p>
          <p class="text-green-500 font-medium bg-green-100 inline-block rounded-full px-3 py-1 mt-1">Good</p>
        </div>
        <div class="text-sm space-y-1 text-gray-600">
          <p>Savings Rate: <span class="font-medium">0%</span></p>
          <p>Expense Ratio: <span class="font-medium">0%</span></p>
          <p>Transaction Frequency: <span class="font-medium">0 this period</span></p>
        </div>
      </div>
    </div>

    <!-- Categories Content (Hidden by default) -->
    <div id="contentCategories" class="hidden">
      <div class="bg-white rounded-2xl shadow p-5">
        <h3 class="text-lg font-semibold mb-2">Expenses by Category</h3>
         <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
        <div class="h-64 bg-gray-200 flex items-center justify-center text-gray-600 text-sm">
          [Pie Chart Placeholder]
        </div>
        <ul class="mt-3 space-y-2 text-sm">
          <li><span class="inline-block w-3 h-3 bg-cyan-400 rounded-full mr-2"></span> Bills & Utilities – 87%</li>
          <li><span class="inline-block w-3 h-3 bg-orange-400 rounded-full mr-2"></span> Food & Dining – 10%</li>
          <li><span class="inline-block w-3 h-3 bg-green-400 rounded-full mr-2"></span> Transportation – 3%</li>
        </ul>
      </div>
      

      <div class="bg-white rounded-2xl shadow p-5">
        <h3 class="text-lg font-semibold mb-2">Top Spending Categories</h3>
        <ul class="space-y-3 text-sm">
          <li class="flex justify-between">
            <span class="category-link cursor-pointer hover:text-blue-600 hover:underline transition-colors" data-category="Bills & Utilities" data-amount="1320">Bills & Utilities</span>
            <span class="font-bold text-gray-700">$1,320 <span class="text-gray-500">(87%)</span></span>
          </li>
          <li class="flex justify-between">
            <span class="category-link cursor-pointer hover:text-blue-600 hover:underline transition-colors" data-category="Food & Dining" data-amount="150.50">Food & Dining</span>
            <span class="font-bold text-gray-700">$150.50 <span class="text-gray-500">(10%)</span></span>
          </li>
          <li class="flex justify-between">
            <span class="category-link cursor-pointer hover:text-blue-600 hover:underline transition-colors" data-category="Transportation" data-amount="45">Transportation</span>
            <span class="font-bold text-gray-700">$45 <span class="text-gray-500">(3%)</span></span>
          </li>
        </ul>
      </div>
    </div>

    <!-- Trends Content (Hidden) -->
    <div id="contentTrends" class="hidden">
      <div class="bg-white rounded-2xl shadow p-5">
        <h3 class="text-lg font-semibold mb-2">Trends Analysis</h3>
        <div class="h-64 bg-gray-200 flex items-center justify-center text-gray-600 text-sm">
          [Trends Chart Placeholder]
        </div>
        <p class="text-gray-500 text-sm mt-3">Spending trends over time will appear here.</p>
      </div>
    </div>

    <!-- Export Content (Hidden) -->
    <div id="contentExport" class="hidden">
      <div class="bg-white rounded-2xl shadow p-5">
        <h3 class="text-lg font-semibold mb-2">Export Reports</h3>
        <p class="text-gray-500 text-sm">Export options for your financial data will appear here.</p>
        <div class="mt-4 space-y-2">
          <button class="bg-blue-600 text-white px-4 py-2 rounded-lg">Export to PDF</button>
          <button class="bg-green-600 text-white px-4 py-2 rounded-lg">Export to CSV</button>
        </div>
      </div>
    </div>
  </div>

  <!-- All JavaScript Inline (with Debug Logs) -->
  <script>
    // Chart.js (unchanged)
    document.addEventListener('DOMContentLoaded', function() {
      console.log('DOM loaded - starting chart and tabs'); // Debug: Check if this logs

      const ctx = document.getElementById('incomeExpenseChart');
      if (ctx) {
        new Chart(ctx, {
          type: 'line',
          data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            datasets: [
              {
                label: 'Income',
                data: [0, 0, 0, 0, 0, 0],
                borderColor: '#16a34a',
                tension: 0.3,
                fill: false,
              },
              {
                label: 'Expenses',
                data: [0, 0, 0, 0, 0, 0],
                borderColor: '#dc2626',
                tension: 0.3,
                fill: false,
              },
            ],
          },
          options: {
            responsive: true,
            plugins: { legend: { position: 'bottom' } },
            scales: { y: { beginAtZero: true } },
          },
        });
        console.log('Chart created successfully'); // Debug
      } else {
        console.error('Chart canvas not found!'); // Debug
      }

      // Tab Functionality
      const tabs = {
        overview: document.getElementById('tabOverview'),
        categories: document.getElementById('tabCategories'),
        trends: document.getElementById('tabTrends'),
        export: document.getElementById('tabExport')
      };

      const contents = {
        overview: document.getElementById('contentOverview'),
        categories: document.getElementById('contentCategories'),
        trends: document.getElementById('contentTrends'),
        export: document.getElementById('contentExport')
      };

      console.log('Tabs found:', tabs); // Debug: Should show objects
      console.log('Contents found:', contents); // Debug

      function switchTab(activeTab) {
        console.log('Switching to tab:', activeTab); // Debug
        // Hide all content
        Object.values(contents).forEach(content => {
          if (content) content.classList.add('hidden');
        });

        // Reset tab styles
        Object.values(tabs).forEach(tab => {
          if (tab) {
            tab.classList.remove('bg-white', 'text-blue-600', 'shadow');
            tab.classList.add('text-gray-600');
          }
        });

        // Show active content and style tab
        if (contents[activeTab]) contents[activeTab].classList.remove('hidden');
        if (tabs[activeTab]) {
          tabs[activeTab].classList.add('bg-white', 'text-blue-600', 'shadow');
        }
      }

      // Add tab click listeners
      Object.keys(tabs).forEach(key => {
        if (tabs[key]) {
          tabs[key].addEventListener('click', () => {
            console.log('Tab clicked:', key); // Debug
            switchTab(key);
          });
        }
      });

      // Default tab
      switchTab('overview');

      // Category Click Functionality
      const categoryLinks = document.querySelectorAll('.category-link');
      console.log('Category links found:', categoryLinks.length); // Debug: Should be 3

      categoryLinks.forEach((link, index) => {
        link.addEventListener('click', function() {
          console.log('Category clicked:', index, this.getAttribute('data-category')); // Debug
          const category = this.getAttribute('data-category');
          const amount = this.getAttribute('data-amount');
          showCategoryDetails(category, amount);
        });
      });

      function showCategoryDetails(category, amount) {
        const details = {
          'Bills & Utilities': 'Electricity: $800, Water: $250, Internet: $270. Recent: Paid Duke Energy on Oct 15.',
          'Food & Dining': 'Groceries: $100, Restaurants: $50.50. Recent: Dinner at Local Bistro on Oct 10.',
          'Transportation': 'Gas: $30, Public Transit: $15. Recent: Uber ride on Oct 12.'
        };
        const detailText = details[category] || 'No details available.';
        alert(`Category: ${category}\nTotal: $${parseFloat(amount).toFixed(2)}\n\nDetails: ${detailText}`);
        console.log('Details shown for:', category); // Debug
      }
    });
  </script>
</body>
</html>