<?php

require_once("util-db.php");
require_once("model-coaches.php");


$pageTitle = "Coaches";
include "view-header.php";

if (isset($_POST['actionType'])) {
    switch ($_POST['actionType']) {
      case "Add";
        insertCoaches($_POST['coName'], $_POST['coLocation']);
        break;
    }
  
}
$coaches = selectCoaches();
include "view-coaches.php";
include "view-footer.php";
  ?>
