<?php
require_once("util-db.php");
require_once("model-teams.php");

$pageTitle="Teams";
include "view-header.php";

if (isset($_POST['actionType'])){
  switch ($_POST['actionType']) {
    case "Add":
    insertTeam($_POST['tName'],$_POST['tDiv']);
    break;
  }
}

$teams = selectTeams();
include "view-teams.php";
include "view-footer.php";
?>
