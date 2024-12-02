<html>
<body>
    <script>
document.body.style.backgroundColor = "lightblue";

</script>
<?php

require_once("util-db.php");
require_once("model-players-and-coaches.php");


$pageTitle = "Coaches and Former Player Teams";
include "view-header.php";

if (isset($_POST['actionType'])) {
    switch ($_POST['actionType']) {
        case "Add":
        
           if(insertFootball($_POST['cid'], $_POST['pid'], $_POST['sid'], $_POST['nfl_team'], $_POST['seasons'], $_POST['division']))
           {
                echo '<div class = "alert alert-success" role = "alert"> Entry added.</div>';
           } else {
                 echo '<div class = "alert alert-danger" role = "alert"> Error adding entry.</div>';
           }
               break;
}


}
$coaches = selectCoaches();
include "view-players-and-coaches.php";
include "view-footer.php";
  ?>
</body>
</html>
