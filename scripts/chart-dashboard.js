// Expense Breakdown Pie Chart
const expenseCtx = document.getElementById('expenseChart').getContext('2d');
new Chart(expenseCtx, {
  type: 'pie',
  data: {
    labels: ['Bills & Utilities', 'Transportation', 'Food & Dining', 'Miscellaneous'],
    datasets: [{
      data: [91, 3.1, 2.9, 3],
      backgroundColor: ['#8b5cf6', '#06b6d4', '#22c55e', '#f97316'],
      borderWidth: 1
    }]
  },
  options: {
    responsive: true,
    plugins: {
      legend: {
        position: 'bottom'
      }
    }
  }
});

// Income vs Expenses Bar Chart
const incomeCtx = document.getElementById('incomeChart').getContext('2d');
new Chart(incomeCtx, {
  type: 'bar',
  data: {
    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
    datasets: [
      {
        label: 'Income',
        data: [5800, 6000, 6200, 5900, 6100, 5800, 6000, 6200, 6100, 5800],
        backgroundColor: '#22c55e'
      },
      {
        label: 'Expenses',
        data: [1450, 1600, 1500, 1400, 1550, 1500, 1600, 1450, 1500, 1400],
        backgroundColor: '#ef4444'
      }
    ]
  },
  options: {
    responsive: true,
    scales: {
      y: {
        beginAtZero: true,
        ticks: {
          stepSize: 1000
        }
      }
    },
    plugins: {
      legend: {
        position: 'bottom'
      }
    }
  }
});
