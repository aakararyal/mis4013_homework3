<?php

require_once("util-db.php");
require_once("model-players.php");


$pageTitle = "Players";
include "view-header.php";


if (isset($_POST['actionType'])) {
    switch ($_POST['actionType']) {
      case "Add":
        if (insertPlayer($_POST['cName'], $_POST ['cPosition'])) {

echo '<div class = "alert alert-success" role = "alert"> Player added.</div>"';
        } else {
                echo '<div class = "alert alert-danger" role = "alert"> Error.</div>';
        }
            
      break;

    }
  }

$players = selectPlayers();
include "view-players.php";
include "view-footer.php";
  ?>
