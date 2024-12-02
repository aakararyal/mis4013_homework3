<?php

require_once("util-db.php");
require_once("model-players-and-coaches.php");


$pageTitle = "Coaches and Former Player Teams";
include "view-header.php";

if (isset($_POST['actionType'])) {
    switch ($_POST['actionType']) {
        case "Add":
            insertFootball($_POST['fName'], $_POST['fCity'], $_POST['fNFL'], $_POST['fDiv']);
            break;
       # case "Edit":
         #   updateFootball($_POST['football_id'], $_POST['coach_id'], $_POST['player_id'], $_POST['stadium_id'], $_POST['nfl_team'], $_POST['seasons'], $_POST['division']);
           # break;
       # case "Delete":
         #  deleteFootball($_POST['football_id']);
          #  break;
   # }
}


}
$coaches = selectCoaches();
include "view-players-and-coaches.php";
include "view-footer.php";
  ?>
