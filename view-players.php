<div class = "row">
<div class = "col">
  <h1>Players</h1>
  </div>
  <div class ="col-auto">
<?php
include "view-players-newform.php";
?>
</div>
</div>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
           <th>ID</th>
           <th>Name</th>
           <th>Position</th>
            <th></th>
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
           </td>
        <td>
        </td>
      </tr>
      <?php
    }
   ?>
      </tbody>
  </table>
</div>
