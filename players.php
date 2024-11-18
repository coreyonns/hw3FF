<?php
require_once("util-db.php");
require_once("model-players.php");

$pageTitle="Players";
include "view-header.php";

if (isset($_POST['actionType'])){
  switch ($_POST['actionType']) {
    case "Add":
      if(insertPlayers($_POST['pName'], $_POST['pPosition'])) {
        echo '<div class="alert alert-success" role="alert">Player added!</div>';
        } else {
          echo '<div class="alert alert-danger" role="alert">Error!</div>';
        }
    break;
     case "Delete":
      if(deletePlayers($_POST['pid'])) {
        echo '<div class="alert alert-success" role="alert">Player deleted!</div>';
        } else {
          echo '<div class="alert alert-danger" role="alert">Error!</div>';
        }
    break;
     case "Edit":
      if(updatePlayers($_POST['pName'], $_POST['pPosition'],$_POST['pid'])) {
        echo '<div class="alert alert-success" role="alert">Player edited!</div>';
        } else {
          echo '<div class="alert alert-danger" role="alert">Error!</div>';
        }
    break;
  }
}
$players = selectPlayers();
include "view-players.php";
include "view-footer.php";
?>
