<?php
require_once("util-db.php");
require_once("model-ppg-and-ranking.php");

$pageTitle="Players PPG and Ranking";
include "view-header.php";

if (isset($_POST['actionType'])){
  switch ($_POST['actionType']) {
    case "Add":
      if(insertPPGandRanking($_POST['rank'], $_POST['avg'])) {
        echo '<div class="alert alert-success" role="alert">PPG and Ranking added!</div>';
        } else {
          echo '<div class="alert alert-danger" role="alert">Error!</div>';
        }
    break;
     case "Delete":
      if(deletePPGandRanking($_POST['rid'])) {
        echo '<div class="alert alert-success" role="alert">PPG and Ranking deleted!</div>';
        } else {
          echo '<div class="alert alert-danger" role="alert">Error!</div>';
        }
    break;
     case "Edit":
      if(updatePPGandRanking($_POST['rank'], $_POST['avg'],$_POST['rid'])) {
        echo '<div class="alert alert-success" role="alert">PPG and Ranking edited!</div>';
        } else {
          echo '<div class="alert alert-danger" role="alert">Error!</div>';
        }
    break;
  }
}
$ppgs = selectPPGandRanking();
include "view-ppg-and-ranking.php";
include "view-footer.php";
?>
