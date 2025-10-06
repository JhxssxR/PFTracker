// Tab switching functionality
document.addEventListener('DOMContentLoaded', function () {
  const tabs = {
    overview: document.getElementById('tabOverview'),
    categories: document.getElementById('tabCategories'),
    trends: document.getElementById('tabTrends'),
    export: document.getElementById('tabExport'),
  };

  const contents = {
    overview: document.getElementById('contentOverview'),
    categories: document.getElementById('contentCategories'),
    trends: document.getElementById('contentTrends'),
    export: document.getElementById('contentExport'),
  };

  // Function to switch tabs
  function switchTab(activeTab) {
    // Hide all content
    Object.values(contents).forEach((content) => {
      if (content) content.classList.add('hidden');
    });

    // Reset all tab styles
    Object.values(tabs).forEach((tab) => {
      if (tab) {
        tab.classList.remove('bg-white', 'text-blue-600', 'shadow');
        tab.classList.add('text-gray-600', 'bg-transparent');
        tab.classList.remove('shadow'); // Remove shadow from active
      }
    });

    // Show active content and style active tab
    if (contents[activeTab]) {
      contents[activeTab].classList.remove('hidden');
    }
    if (tabs[activeTab]) {
      tabs[activeTab].classList.add('bg-white', 'text-blue-600', 'shadow');
      tabs[activeTab].classList.remove('text-gray-600', 'bg-transparent');
    }
  }

  // Add click listeners to each tab
  Object.keys(tabs).forEach((key) => {
    if (tabs[key]) {
      tabs[key].addEventListener('click', () => switchTab(key));
    }
  });

  // Set default active tab (Overview)
  switchTab('overview');
});
