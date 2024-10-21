<?php

require_once("util-db.php");
require_once("model-coaches.php");


$pageTitle = "Coaches with Players";
include "view-header.php";
$coaches = selectCoachesWithPlayers($_GET['id']);
include "view-coaches.php";
include "view-footer.php";
  ?>
