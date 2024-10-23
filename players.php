<?php

require_once("util-db.php");
require_once("model-players.php");


$pageTitle = "Players";
include "view-header.php";


if (isset($_POST['actionType'])) {
    switch ($_POST['actionType']) {
      case "Add":

        insertPlayer($_POST['cName'], $_POST ['cPosition']);
      break;

    }
  }

$players = selectPlayers();
include "view-players.php";
include "view-footer.php";
  ?>
