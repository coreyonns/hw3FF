<h1>PPG and Ranking</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
       <th>ID</th>
       <th>Player Name</th>
       <th>Position</th>
        <th>Avg Points</th>
         <th>Position Rank</th>
      </tr>
    </thead>
    <tbody>   
  <?php
    while ($ppg = $ppgs->fetch_assoc()) {
      ?>
      <tr>
        <td><?php echo $ppg['player_id']; ?></td>
         <td><?php echo $ppg['player_name']; ?></td>
        <td><?php echo $ppg['player_position']; ?></td>
          <td><?php echo $ppg['avg_points']; ?></td>
            <td><?php echo $ppg['position_rank']; ?></td>


        
      </tr>
      <?php
    }
   ?>
      </tbody>
  </table>
</div>
