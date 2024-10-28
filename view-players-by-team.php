<h1>Players by Team</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
       <th>ID</th>
       <th>Player Name</th>
       <th>Position</th>
        
      </tr>
    </thead>
    <tbody>   
  <?php
    while ($playerteam = $playerteams->fetch_assoc()) {
      ?>
      <tr>
        <td><?php echo $playerteam['player_id']; ?></td>
         <td><?php echo $playerteam['player_name']; ?></td>
        <td><?php echo $playerteam['player_position']; ?></td>
        
      </tr>
      <?php
    }
   ?>
      </tbody>
  </table>
</div>
