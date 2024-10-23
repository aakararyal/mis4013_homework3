<?php

require_once("util-db.php");
require_once("model-players-and-coaches.php");


$pageTitle = "Players and Coaches";
include "view-header.php";
$coaches = selectCoaches();
include "view-players-and-coaches.php";
include "view-footer.php";
  ?>
