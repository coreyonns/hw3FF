<div class = "row">
<div class = "col">
  <h1>Information</h1>
  </div>
  <div class ="col-auto">
<?php
include "view-information-newform.php";
?>
</div>
</div>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
           <th>Name</th>
           <th>Total Yards Last Game</th>
           <th>Total Touches Last Game</th>
            <th>Total Touchdowns Last Game</th>
      </tr>
    </thead>
    <tbody>   
  <?php
    while ($infos = $info->fetch_assoc()) {
      ?>
      <tr>
            <td><?php echo $infos['player_name']; ?></td>
             <td><?php echo $infos['yards']; ?></td>
            <td><?php echo $infos['touches']; ?></td>
             <td><?php echo $infos['touchdowns']; ?></td>
           
      </tr>
      <?php
    }
   ?>
      </tbody>
  </table>
</div>
