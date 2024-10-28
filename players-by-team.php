<?php
require_once("util-db.php");
require_once("model-players-by-team.php");

$pageTitle="Players by Team";
include "view-header.php";
$playerteams = selectPlayersByTeam($_POST['pid']);
include "view-players-by-team.php";
include "view-footer.php";
?>
