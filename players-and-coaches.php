<?php

require_once("util-db.php");
require_once("model-players-and-coaches.php");


$pageTitle = "Coaches and Former Player Teams";
include "view-header.php";
$coaches = selectCoaches();
include "view-players-and-coaches.php";
include "view-footer.php";
  ?>
