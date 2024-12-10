<html>

<head>
<style>
    body {
        background-image: url('https://media.istockphoto.com/id/1354705614/photo/gaylord-family-oklahoma-memorial-stadium-at-the-university-of-oklahoma.jpg?s=612x612&w=0&k=20&c=o0zoZKgbg55DJNb5oGQQjmcIcprw7rU3lV7uCgVRTjY=');
       background-position: center;
            background-size: cover;
            text-align: center;
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
