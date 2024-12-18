<?php
require_once("util-db.php");
require_once("model-information.php");

$pageTitle="Information";
include "view-header.php";

if (isset($_POST['actionType'])){
  switch ($_POST['actionType']) {
    case "Add":
      if(insertInfo($_POST['iYards'], $_POST['iTouches'],$_POST['iTouchdowns'])) {
        echo '<div class="alert alert-success" role="alert">Info added!</div>';
        } else {
          echo '<div class="alert alert-danger" role="alert">Error!</div>';
        }
    break;
     case "Delete":
      if(deleteInfo($_POST['iid'])) {
        echo '<div class="alert alert-success" role="alert">Info deleted!</div>';
        } else {
          echo '<div class="alert alert-danger" role="alert">Error!</div>';
        }
    break;
     case "Edit":
      if(updateInfo($_POST['iYards'], $_POST['iTouches'],$_POST['iTouchdowns'],$_POST['iid'])) {
        echo '<div class="alert alert-success" role="alert">Info edited!</div>';
        } else {
          echo '<div class="alert alert-danger" role="alert">Error!</div>';
        }
    break;
  }
}
$info = selectInfo();
include "view-information.php";
include "view-footer.php";
?>
