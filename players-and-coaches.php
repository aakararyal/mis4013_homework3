<html>

<head>
<style>
    body {
        background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSDY1bPjndCB2lBOzONoSuCxg6pYe4AM9fTcw&s');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
        font-family: Arial, sans-serif;
        color: #fff;
    }
</style>


        
    </head>


    
<body>
    <script>
document.body.style.backgroundColor = "lightblue";

</script>
<?php

require_once("util-db.php");
require_once("model/players-and-coaches.php");


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
        case "Edit":
                if (updateFootball($_POST['fid'], $_POST['cid'], $_POST['pid'], $_POST['sid'], $_POST['nfl_team'], $_POST['seasons'], $_POST['division'])) {
                    echo '<div class="alert alert-success" role="alert">Entry edited.</div>';
                } else {
                    echo '<div class="alert alert-danger" role="alert">Error.</div>';
                }
                break;

         case "Delete":
        
           if(deleteFootball($_POST['fid']))
           {
                echo '<div class = "alert alert-success" role = "alert"> Entry deleted.</div>';
           } else {
                 echo '<div class = "alert alert-danger" role = "alert"> Error deleting entry.</div>';
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
