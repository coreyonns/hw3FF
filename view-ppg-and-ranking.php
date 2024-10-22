<h1>PPG and Rankings</h1>
<div class="card-group">

  <?php
    while ($player = $players->fetch_assoc()) {
      ?>
      <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $player['player_name']; ?></h5>
      <p class="card-text">
    
      </p>
      <p class="card-text"><small class="text-body-secondary">Position: <?php echo $player['player_position']; ?></small></p>
    </div>
  </div>
      <tr>
            <td><?php echo $player['player_id']; ?></td>
             <td><?php echo $player['player_name']; ?></td>
            <td><?php echo $player['player_position']; ?></td>
             <td><a href="teams-by-player.php?id=<?php echo $player['player_id']; ?>">Teams</a></td>
      </tr>
      <?php
    }
   ?>
      </div>
