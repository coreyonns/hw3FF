<?php
require_once("util-db.php");
require_once("model-players-chart.php");

$pageTitle="Players Chart";
include "view-header.php";
$players = selectPlayers();
include "view-players-chart.php";
include "view-footer.php";
?>
