<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Player Yards Chart</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <h1 class="text-center">Player Yards Chart</h1>
    <canvas id="playerYardsChart" width="400" height="200"></canvas>
  </div>

  <script>
    // Example data: Player names and their yards
 const playerNames = ['Breece Hall', 'Puka Nacua', 'Sam Laporta', 'David Montgomery', 'Zay Flowers','Kareem Hunt','Jayden Daniels','Marvin Harrison Jr'];
    const playerYards = [85, 11, 28, 96,127,59,245,34,];

    // Chart configuration
    const ctx = document.getElementById('playerYardsChart').getContext('2d');
    const playerYardsChart = new Chart(ctx, {
      type: 'bar', // Bar chart
      data: {
        labels: playerNames, // Player names as labels
        datasets: [{
          label: 'Yards',
          data: playerYards, // Yards data
          backgroundColor: [
            'rgba(75, 192, 192, 0.6)',
            'rgba(54, 162, 235, 0.6)',
            'rgba(255, 206, 86, 0.6)',
            'rgba(153, 102, 255, 0.6)'
          ],
          borderColor: [
            'rgba(75, 192, 192, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
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
        },
        scales: {
          y: {
            beginAtZero: true,
            title: {
              display: true,
              text: 'Yards'
            }
          },
          x: {
            title: {
              display: true,
              text: 'Players'
            }
          }
        }
      }
    });
  </script>
</body>
</html>
