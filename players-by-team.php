<?php

require_once("util-db.php");
require_once("model-players-by-team.php");


$pageTitle = "Players and NFL Teams";
include "view-header.php";
$playerteam = selectPlayersByTeam($_POST['cid']);
include "view-players-by-team.php";
include "view-footer.php";
  ?>
