<?php

require_once("util-db.php");
require_once("model-players-by-stadium.php");


$pageTitle = "Players and Stadiums";
include "view-header.php";
$playerstadium = selectPlayersByStadium($_POST['cid']);
include "view-players-by-stadium.php";
include "view-footer.php";
  ?>
