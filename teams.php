<?php
require_once("util-db.php");
require_once("model-teams.php");

$pageTitle="Teams";
include "view-header.php";

if (isset($_POST['actionType'])){
  switch ($_POST['actionType']) {
    case "Add":
      if(insertTeams($_POST['tName'], $_POST['tDiv'])) {
        echo '<div class="alert alert-success" role="alert">Team added!</div>';
        } else {
          echo '<div class="alert alert-danger" role="alert">Error!</div>';
        }
    break;
     case "Delete":
      if(deleteTeams($_POST['tid'])) {
        echo '<div class="alert alert-success" role="alert">Team deleted!</div>';
        } else {
          echo '<div class="alert alert-danger" role="alert">Error!</div>';
        }
    break;
     case "Edit":
      if(updateTeams($_POST['tName'], $_POST['tDiv'],$_POST['tid'])) {
        echo '<div class="alert alert-success" role="alert">Team edited!</div>';
        } else {
          echo '<div class="alert alert-danger" role="alert">Error!</div>';
        }
    break;
  }
}

$teams = selectTeams();
include "view-teams.php";
include "view-footer.php";
?>
