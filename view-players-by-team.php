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
    while ($playertean = $playerteams->fetch_assoc()) {
      ?>
      <tr>
        <td><?php echo $team['team_id']; ?></td>
         <td><?php echo $team['team_name']; ?></td>
        <td><?php echo $team['team_division']; ?></td>
        
      </tr>
      <?php
    }
   ?>
      </tbody>
  </table>
</div>
