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
 <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
         #myInput {
            background-image: url('/css/searchicon.png');
            background-position: 10px 12px;
            background-repeat: no-repeat;
            width: 100%;
            font-size: 16px;
            padding: 12px 20px 12px 40px;
            border: 1px solid #ddd;
            margin-bottom: 12px;
        }

        #myUL {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        #myUL li {
            border: 1px solid #ddd;
            margin-top: -1px; /* Prevent double borders */
            background-color: #f9f9f9;
            padding: 12px;
            font-size: 18px;
            display: block;
        }

        #myUL li:hover {
            background-color: #f1f1f1;
        }
    </style>

        
    </head>
<body>
<?php

require_once("util-db.php");
require_once("model-players.php");


$pageTitle = "Players";
include "view/header.php";


if (isset($_POST['actionType'])) {
    switch ($_POST['actionType']) {
      case "Add":
        if (insertPlayer($_POST['cName'], $_POST ['cPosition'])) {

echo '<div class = "alert alert-success" role = "alert"> Player added.</div>"';
        } else {
                echo '<div class = "alert alert-danger" role = "alert"> Error.</div>';
        }
            
      break;

 case "Edit":
        if (updatePlayer($_POST['cName'], $_POST ['cPosition'], $_POST['cid'])) {

echo '<div class = "alert alert-success" role = "alert"> Player edited.</div>"';
        } else {
                echo '<div class = "alert alert-danger" role = "alert"> Error.</div>';
        }
            
      break;
        
         case "Delete":
        if (deletePlayer($_POST['cid'])){

            echo '<div class = "alert alert-success" role = "alert"> Player deleted.</div>';
        } else {
                echo '<div class = "alert alert-danger" role = "alert"> Error.</div>';
        }
            
      break;

    }
  }

$players = selectPlayers();
include "view-players.php"; ?>
<h2>Filter by Name</h2>
<input type="text" id="myInput" onkeyup="filterList()" placeholder="Search for players...">
<ul id="myUL">
    <?php foreach ($players as $player): ?>
        <li>
            <?= $player['player_name'] ?> - <?= $coach['player_position'] ?>
        </li>
    <?php endforeach; ?>
</ul>
<script>
    // source https://www.w3schools.com/howto/howto_js_filter_lists.asp
    function filterList() {
        var input, filter, ul, li, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        ul = document.getElementById("myUL");
        li = ul.getElementsByTagName("li");

        for (var i = 0; i < li.length; i++) {
            txtValue = li[i].textContent || li[i].innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = "";
            } else {
                li[i].style.display = "none";
            }
        }
    }
</script>




<?php include "view/footer.php";
  ?>

</body>
</html>
