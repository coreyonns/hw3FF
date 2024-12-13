<?php
require_once("util-db.php");
require_once("model-positions-chart.php");

$pageTitle="Positions Count";
include "view-header.php";
$players = selectPlayers();
include "view-postions-chart.php";
include "view-footer.php";
?>
