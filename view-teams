<h1>Teams</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
       <th>ID</th>
       <th>Team Name</th>
       <th>Division</th>
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
      </tr>
      <?php
    }
   ?>
      </tbody>
  </table>
</div>
