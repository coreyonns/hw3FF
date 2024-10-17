<h1>Teams by Player</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
       <th>ID</th>
       <th>Team Name</th>
       <th>Division</th>
        <th>Points Per Game</th>
        <th>Postion Rank</th>
      </tr>
    </thead>
    <tbody>   
  <?php
    while ($team = $teams->fetch_assoc()) {
      ?>
      <tr>
        <td><?php echo $team['team_id']; ?></td>
         <td><?php echo $team['team_name']; ?></td>
        <td><?php echo $team['team_division']; ?></td>
         <td><?php echo $team['avg_points']; ?></td>
          <td><?php echo $team['position_rank']; ?></td>
      </tr>
      <?php
    }
   ?>
      </tbody>
  </table>
</div>
