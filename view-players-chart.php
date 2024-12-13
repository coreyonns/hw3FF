<h1>Players Chart</h1>
<div>
  <canvas id="myChart"></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>'

  <?php
    while ($player = $players->fetch_assoc()) {
    
      
    
    }
   ?>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'doughnut',
    data:{
    datasets: [{
        data: [
    <?php
    while ($player = $players->fetch_assoc()) {
      echo $player ['num_yards'] . ", ";
    }
   ?>
        ]
    }],

    // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: [
         <?php
    $players= selectsPlayers();
    while ($player = $players->fetch_assoc()) {
      echo "'" . $player ['player_name'] . ", ";
    }
   ?>
    ]
},
  });
</script>
 