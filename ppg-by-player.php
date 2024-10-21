<?php
require_once("util-db.php");
require_once("model-ppg-by-player.php");

$pageTitle="PPG by Player";
include "view-header.php";
$ppg = selectPpgByPlayer($_GET['pid']);
include "view-ppg-by-player.php";
include "view-footer.php";
?>
