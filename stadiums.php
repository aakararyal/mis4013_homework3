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
require_once("model-stadiums.php");


$pageTitle = "Stadiums";
include "view/header.php";


if (isset($_POST['actionType'])) 
{
  switch ($_POST['actionType']) {
    case "Add":
    if (insertStadiums($_POST['sName'], $_POST['sCap'])) {
      echo '<div class="alert alert-success" role="alert">Stadium added. </div>';
    } else {
       echo '<div class="alert alert-danger" role="alert">Error. </div>';
    }
      break;
  
  case "Edit":
    if (updateStadiums($_POST['sName'], $_POST['sCap'], $_POST['sid'])) {
      echo '<div class="alert alert-success" role="alert">Stadium edited. </div>';
    } else {
       echo '<div class="alert alert-danger" role="alert">Error. </div>';
    }
      break;
    
  case "Delete":
    if (deleteStadiums($_POST['sid'])) {
      echo '<div class="alert alert-success" role="alert">Stadium deleted. </div>';
    } else {
       echo '<div class="alert alert-danger" role="alert">Error. </div>';
    }
      break;
  }
}

$stadiums = selectStadiums();
include "view-stadiums.php";
include "view/footer.php";
  ?>
</body>
</html>
