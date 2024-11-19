<?php

require_once("util-db.php");
require_once("model-stadiums.php");


$pageTitle = "Stadiums";
include "view-header.php";


if (isset($_POST['actionType'])) 
{
  switch ($_POST['actionType']) {
    case "Add":
    insertStadiums($_POST['sName'], $_POST['sCap']);
    break;
  }

}

$stadiums = selectStadiums();
include "view-stadiums.php";
include "view-footer.php";
  ?>
