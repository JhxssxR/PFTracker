<div class="space-y-10">

  <!-- Currency & Region -->
  <section>
    <h2 class="text-xl font-semibold mb-4">Currency & Region</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <div><label class="block mb-1 font-medium">Currency</label><select class="w-full border rounded p-2"><option selected>US Dollar</option></select></div>
      <div><label class="block mb-1 font-medium">Date Format</label><select class="w-full border rounded p-2"><option selected>MM/DD/YYYY</option></select></div>
      <div><label class="block mb-1 font-medium">Language</label><select class="w-full border rounded p-2"><option selected>English</option></select></div>
    </div>
  </section>

  <!-- Appearance -->
  <section>
    <h2 class="text-xl font-semibold mb-4">Appearance</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <div><label class="block mb-1 font-medium">Theme</label><select class="w-full border rounded p-2"><option selected>Light</option><option>Dark</option><option>System</option></select></div>
      <div class="flex items-center space-x-2"><input type="checkbox" id="autoBackup" class="toggle-checkbox" checked><label for="autoBackup">Auto Backup</label></div>
      <div><label class="block mb-1 font-medium">Backup Frequency</label><select class="w-full border rounded p-2"><option selected>Every 7 Days</option></select></div>
    </div>
  </section>

  <!-- Security & Data -->
  <section>
    <h2 class="text-xl font-semibold mb-4">Security & Data</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <div class="flex items-center space-x-2"><input type="checkbox" id="twoFactor" class="toggle-checkbox"><label for="twoFactor">Two-Factor Authentication</label></div>
      <div>
        <label class="block mb-1 font-medium">Export Data</label>
        <div class="space-y-2">
          <button class="bg-gray-200 px-3 py-1 rounded">Export Transactions (CSV)</button>
          <button class="bg-gray-200 px-3 py-1 rounded">Export Financial Report</button>
          <button class="bg-gray-200 px-3 py-1 rounded">Export All Data (Backup)</button>
        </div>
      </div>
      <div class="flex items-center justify-end"><button class="text-red-600 hover:underline">Delete Account</button></div>
    </div>
  </section>

  <!-- Notification Preferences -->
  <section>
    <h2 class="text-xl font-semibold mb-4">Notification Preferences</h2>
    <div class="grid grid-cols-1 md:grid-cols-2