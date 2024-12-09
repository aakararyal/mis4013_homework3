
<html>

<head>
<style>
    body {
        background-image: url('https://cdn11.bigcommerce.com/s-jdhnct1/images/stencil/1280x1280/products/455/1218/football_stadium_horz__53833.1462478985.jpg?c=2');
       
    }
</style>


        
    </head>


    
<body>
   


<td>
    <a href="coaches-with-players.php? id = <?php echo $coach['coaches_id']; ?>"> View Players </a>
    
</td>
    <form method = "GET">
        <input type = "text" name = "search" placeholder = "Search Coaches " />
        <button type = "submit">Search</button>
    </form>
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
