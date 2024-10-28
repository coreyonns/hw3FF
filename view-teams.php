<h1>Teams</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
       <th>ID</th>
       <th>Team Name</th>
       <th>Division</th>
        <th></th>
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
        <td>
          <form method="post" action="players-by-team.php">
            <input type="hidden" name="pid" value="<?php echo $team['team_id']; ?>">
            <button type="submit" class="btn btn-primary">Players</button>
          </form>
        </td>
      </tr>
      <?php
    }
   ?>
      </tbody>
  </table>
</div>
