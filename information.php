<?php
require_once("util-db.php");
require_once("model-information.php");

$pageTitle="Information";
include "view-header.php";
$info = selectInfo();
include "view-information.php";
include "view-footer.php";
?>
