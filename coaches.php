
<html>
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
