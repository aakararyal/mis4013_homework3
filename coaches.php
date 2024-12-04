
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


<p>Click the button to swap text</p>

<p><button onclick="myFunction()">Click Here!</button></p>

<div id="newDiv">Places</div>

<script>
function myFunction() {
  var x = document.getElementById("newDiv");
  if (x.innerHTML === "Places") {
    x.innerHTML = "New Information";
  } else {
    x.innerHTML = "Places";
  }
}
</script>

<h2>Date Website Made</h2>

<p id="examplenov"></p>

<script>
const d = new Date("2024-11-05");
document.getElementById("examplenov").innerHTML = d;
</script>

 <h3>All SEC Conferences</h3>

<p id="demo"></p>

<script>
const conferences = new Array("SEC ", " Big 10 ", " ACC ", " Big 12 ");
document.getElementById("demo").innerHTML = conferences;
</script>

<h3>Teams in Big 10 Using a Map Search</h3>

<p id="newTeams"></p>

<script>
const midwest = new Map([
  ["Michigan", 145],
  ["Ohio State", 134],
  ["Indiana", 137]
]);

let teams = midwest.get("Michigan");
document.getElementById("newTeams").innerHTML = teams + " is the number of years Michigan has been in CFB.";
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
include "view-footer.php";
  ?>
</body>
</html>
