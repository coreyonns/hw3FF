<?php
require_once("util-db.php");
require_once("model-ppg-and-ranking.php");

$pageTitle="Players PPG and Ranking";
include "view-header.php";
$ppgs = selectPPGandRanking();
include "view-ppg-and-ranking.php";
include "view-footer.php";
?>
