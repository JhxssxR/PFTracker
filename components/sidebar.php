<div class="w-72 bg-white border-r flex flex-col justify-between p-6">
  <!-- Logo -->
  <div>
    <div class="mb-6">
      <div class="flex items-center gap-2">
        <div class="bg-purple-600 text-white rounded p-2 font-bold">🐷</div>
        <div>
          <div class="text-xl font-bold text-gray-800">PFTracker</div>
          <div class="text-sm text-gray-500">Financial Suite</div>
        </div>
      </div>
    </div>

    <!-- Financial Summary -->
    <div class="mb-6 space-y-2">
      <div class="bg-green-100 text-green-700 px-3 py-2 rounded font-semibold">Net Income: $0</div>
      <div class="text-green-700 font-medium">Income: $0</div>
      <div class="text-red-600 font-medium">Expenses: $0</div>
    </div>

    <!-- Navigation -->
    <?php
      $nav = [
        'dashboard' => [
          'Dashboard',
          '<svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 12l2-2m0 0l7-7 7 7M13 5v6h6"/></svg>',
          null
        ],
        'transactions' => [
          'Transactions',
          '<svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M17 9V7a4 4 0 00-8 0v2M5 13h14M12 17v2"/></svg>',
          '<span class="ml-auto text-white text-xs px-2 py-0.5 rounded-full"></span>'
        ],
        'analytics' => [
          'Analytics',
          '<svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M11 11V7a1 1 0 012 0v4h4a1 1 0 010 2h-4v4a1 1 0 01-2 0v-4H7a1 1 0 010-2h4z"/></svg>',
          null
        ],
        'budgets' => [
          'Budgets',
          '<svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M4 6h16M4 10h16M4 14h16M4 18h16"/></svg>',
          '<span class="ml-auto text-xs text-purple-500"></span>'
        ],
        'reports' => [
          'Reports',
          '<svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M11 11V7a1 1 0 012 0v4h4a1 1 0 010 2h-4v4a1 1 0 01-2 0v-4H7a1 1 0 010-2h4z"/></svg>',
          null
        ],
        'settings' => [
          'Settings',
          '<svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 8c-1.657 0-3 1.343-3 3s1.343 3 3 3 3-1.343 3-3-1.343-3-3-3z"/><path d="M12 2v2m0 16v2m10-10h-2M4 12H2m15.364-6.364l-1.414 1.414M6.05 17.95l-1.414 1.414M17.95 17.95l-1.414-1.414M6.05 6.05L4.636 7.464"/></svg>',
          null
        ]
      ];

      $current = $_GET['page'] ?? 'transactions';
      foreach ($nav as $key => [$label, $icon, $badge]) {
        $active = $key === $current ? 'bg-blue-100 text-blue-700 font-semibold' : 'text-gray-700';
        $badge = $badge ?? '';
        echo "<a href='?page=$key' class='flex items-center justify-between px-3 py-2 rounded $active hover:bg-blue-50'>
                <span class='flex items-center gap-2'>$icon<span>$label</span></span>
                $badge
              </a>";
      }
    ?>
  </div>

  <!-- User Profile -->
  <div class="mt-6 border-t pt-4 text-sm text-gray-600">
    <div class="flex items-center gap-2 mb-2">
      <div class="bg-blue-600 text-white rounded-full w-8 h-8 flex items-center justify-center font-bold">JD</div>
      <div>
        <p class="font-semibold text-gray-800">John Doe</p>
        <p>john@example.com</p>
      </div>
    </div>

    <!-- Bottom Items -->
    <div class="space-y-2">
      <div class="flex items-center justify-between px-3 py-2 rounded hover:bg-gray-100">
        <span class="flex items-center gap-2">🌙 Theme</span>
      </div>
      <div class="flex items-center justify-between px-3 py-2 rounded hover:bg-gray-100">
        <span class="flex items-center gap-2">🔔 Notifications</span>
        <span class="bg-red-500 text-white text-xs px-2 py-0.5 rounded-full">3</span>
      </div>
      <div class="flex items-center justify-between px-3 py-2 rounded hover:bg-gray-100">
        <span class="flex items-center gap-2">⚙️ Settings</span>
      </div>
    </div>
  </div>
  </div>
