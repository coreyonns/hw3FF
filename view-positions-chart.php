<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Player Positions Chart</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <h1 class="text-center">Player Positions Count</h1>
    <canvas id="positionsChart" width="400" height="200"></canvas>
  </div>

  <script>
    // Example data: Positions and their counts
    const positions = ['Quarterback (QB)', 'Wide Receiver (WR)', 'Running Back (RB)', 'Tight End (TE)', 'Kicker (K)'];
    const positionCounts = [1, 3, 3, 1, 0]; // Example counts of each position

    // Chart configuration
    const ctx = document.getElementById('positionsChart').getContext('2d');
    const positionsChart = new Chart(ctx, {
      type: 'doughnut', // Doughnut chart
      data: {
        labels: positions, // Position names
        datasets: [{
          data: positionCounts, // Counts for each position
          backgroundColor: [
            'rgba(255, 99, 132, 0.6)',
            'rgba(54, 162, 235, 0.6)',
            'rgba(255, 206, 86, 0.6)',
            'rgba(75, 192, 192, 0.6)',
            'rgba(153, 102, 255, 0.6)'
          ],
          borderColor: [
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)'
          ],
          borderWidth: 1
        }]
      },
      options: {
        responsive: true,
        plugins: {
          legend: {
            display: true,
            position: 'top'
          },
          tooltip: {
            enabled: true
          }
        }
      }
    });
  </script>
</body>
</html>
