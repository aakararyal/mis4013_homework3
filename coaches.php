
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
require_once("model-coaches.php");


$pageTitle = "Coaches";
include "view/header.php";

if (isset($_POST['actionType'])) {
    switch ($_POST['actionType']) {
      case "Add";
        if (insertCoaches($_POST['coName'], $_POST['coLocation'])) {
            echo '<div class="alert alert-success" role="alert"> Coach added. </div>';
        } else {
             echo '<div class="alert alert-danger" role="alert"> Error. </div>';
        }
        break;
   case "Edit";
        if (updateCoaches($_POST['coName'], $_POST['coLocation'], $_POST['coid'])) {
            echo '<div class="alert alert-success" role="alert"> Coach edited. </div>';
        } else {
             echo '<div class="alert alert-danger" role="alert"> Error. </div>';
        }
        break; 
case "Delete";
        if (deleteCoaches($_POST['coid'])) {
            echo '<div class="alert alert-success" role="alert"> Coach deleted. </div>';
        } else {
             echo '<div class="alert alert-danger" role="alert"> Error. </div>';
        }
        break; }
  
}
$coaches = selectCoaches();
include "view-coaches.php";
include "view/footer.php";
  ?>
</body>
</html>
