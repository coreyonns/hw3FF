<h1>Players</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
           <th>ID</th>
           <th>Name</th>
           <th>Position</th>
            <th></th>
            <th></th>
      </tr>
    </thead>
    <tbody>   
  <?php
    while ($player = $players->fetch_assoc()) {
      ?>
      <tr>
            <td><?php echo $player['player_id']; ?></td>
             <td><?php echo $player['player_name']; ?></td>
            <td><?php echo $player['player_position']; ?></td>
             <td><a href="teams-by-player.php?id=<?php echo $player['player_id']; ?>">Teams</a></td>
            <td>
              <form method= "post" action="ppg-by-player.php">
                <input type = "hidden" name= "pid" value= "<?php echo $player['player_id']; ?>">
                <button type="submit" class="btn btn-primary">PPG</button>
              </form>
        </td>
      </tr>
      <?php
    }
   ?>
      </tbody>
  </table>
</div>
