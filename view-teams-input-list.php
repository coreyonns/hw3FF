<select class="form-select" id="tName" name="tName">
<?php 
while ($teamItem= $teamList->fetch_assoc()){
?>
    <option value="<?php echo $teamItem ['team_name'];?>"><?php echo $teamItem ['team_name'];?></option>
  <?php
}
?>  
</select>
