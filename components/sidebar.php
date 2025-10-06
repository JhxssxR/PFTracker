<div class="w-72 bg-white border-r flex flex-col justify-between">
  <!-- Top Section -->
  <div class="p-6">
    <!-- Logo -->
    <div class="flex items-center gap-3 mb-6">
      <div class="bg-gradient-to-tr from-purple-500 to-indigo-500 text-white rounded-2xl p-3 shadow-md">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M5 10a7 7 0 0114 0v4a7 7 0 01-14 0v-4zM12 14v2m0-8v2" />
        </svg>
      </div>
      <div>
        <p class="text-lg font-bold text-gray-800">PFTracker</p>
        <p class="text-sm text-gray-500 -mt-1">Financial Suite</p>
      </div>
    </div>

    <!-- Financial Summary -->
    <div class="space-y-3 mb-6">
      <div class="bg-green-50 text-green-700 rounded-xl px-4 py-3">
        <p class="font-semibold text-sm">Net Income</p>
        <p class="text-2xl font-bold">$0</p>
      </div>
      <div class="flex justify-between text-sm">
        <div class="bg-gray-50 rounded-lg px-3 py-2 w-[48%] text-center">
          <p class="text-gray-500">Income</p>
          <p class="text-green-600 font-bold">$0</p>
        </div>
        <div class="bg-gray-50 rounded-lg px-3 py-2 w-[48%] text-center">
          <p class="text-gray-500">Expenses</p>
          <p class="text-red-600 font-bold">$0</p>
        </div>
      </div>
    </div>

    <!-- Navigation -->
    <?php
      $nav = [
        'dashboard' => [
          'Dashboard',
          '<svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7m-9 2v8a2 2 0 002 2h4a2 2 0 002-2v-8m-6 0h6"/></svg>',
          null
        ],
        'transactions' => [
          'Transactions',
          '<svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 1.343-3 3h6c0-1.657-1.343-3-3-3zM5 13h14M12 17v2"/></svg>',
          '<span class="ml-auto bg-gray-100 text-gray-800 text-xs font-medium px-2 py-0.5 rounded-full">7</span>'
        ],
        'analytics' => [
          'Analytics',
          '<svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3h2v18h-2zM6 10h2v11H6zM16 6h2v15h-2z"/></svg>',
          null
        ],
        'reports' => [
          'Reports',
          '<svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2a4 4 0 018 0v2M7 10h10M12 6v4"/></svg>',
          null
        ],
        'budget' => [
          'Budget',
          '<svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h18M3 10h18M3 15h18M3 20h18"/></svg>',
          '<span class="ml-auto bg-gray-200 text-gray-700 text-xs px-2 py-0.5 rounded-full">Soon</span>'
        ],
        'settings' => [
          'Settings',
          '<svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317a1 1 0 011.35-.436l.094.053a1 1 0 01.436 1.35L12 6.236l.305.29a1 1 0 01-.436 1.35l-.094.053a1 1 0 01-1.35-.436L10 7l-.305-.29a1 1 0 01.436-1.35l.094-.043zM4 12a8 8 0 1116 0A8 8 0 014 12z"/></svg>',
          null
        ]
      ];

      $current = $_GET['page'] ?? 'dashboard';
      foreach ($nav as $key => [$label, $icon, $badge]) {
        $isActive = $key === $current;
        $classes = $isActive
          ? 'bg-indigo-50 text-indigo-600 font-semibold'
          : 'text-gray-700 hover:bg-gray-50';
        echo "<a href='?page=$key' class='flex items-center justify-between px-4 py-2.5 rounded-lg mb-1 $classes'>
                <span class='flex items-center gap-2'>$icon<span>$label</span></span>
                $badge
              </a>";
      }
    ?>
  </div>

  <!-- Bottom Section -->
  <div class="p-6 border-t space-y-3 text-sm text-gray-700">
    <!-- User -->
    <div class="flex items-center gap-3">
      <div class="bg-gradient-to-tr from-purple-500 to-indigo-500 text-white font-semibold rounded-full w-9 h-9 flex items-center justify-center">DU</div>
      <div>
        <p class="font-semibold text-gray-800">Demo User</p>
        <p class="text-gray-500 text-xs">demo@pftracker.com</p>
      </div>
    </div>

    <!-- Options -->
    <div class="pt-3 space-y-2">
      <div class="flex items-center justify-between px-3 py-2 rounded hover:bg-gray-50 cursor-pointer">
        <span class="flex items-center gap-2">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12.79A9 9 0 1111.21 3h.29v2a7 7 0 107 7h2v.79z"/></svg>
          Theme
        </span>
      </div>
      <div class="flex items-center justify-between px-3 py-2 rounded hover:bg-gray-50 cursor-pointer">
        <span class="flex items-center gap-2">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V4a2 2 0 10-4 0v1.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1h6z"/></svg>
          Notifications
        </span>
        <span class="bg-red-500 text-white text-xs px-2 py-0.5 rounded-full">3</span>
      </div>
      <div class="flex items-center gap-2 px-3 py-2 rounded hover:bg-gray-50 text-red-600 font-medium cursor-pointer">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h6a2 2 0 012 2v1"/></svg>
        Logout
      </div>
    </div>
  </div>
  </div>
