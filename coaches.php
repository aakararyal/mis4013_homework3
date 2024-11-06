
<html>
<body>
<p> Month Currently: </p>
    <script>
document.body.style.backgroundColor = "red";


  <! --  source: https://www.w3schools.com/jsref/jsref_getutcmonth.asp-->  

   const months = ["January","February","March","April","May","June","July","August","September","October","November","December"];
const d = new Date()
let month = month[d.getUTCMonth()];
</script>
    

<?php

require_once("util-db.php");
require_once("model-coaches.php");


$pageTitle = "Coaches";
include "view-header.php";

if (isset($_POST['actionType'])) {
    switch ($_POST['actionType']) {
      case "Add";
        if (insertCoaches($_POST['coName'], $_POST['coLocation'])) {
            echo '<div class="alert alert-success" role="alert"> Coach added. </div>';
        } else {
             echo '<div class="alert alert-danger" role="alert"> Error. </div>';
        }
        break;
    }
  
}
$coaches = selectCoaches();
include "view-coaches.php";
include "view-footer.php";
  ?>
</body>
</html>
