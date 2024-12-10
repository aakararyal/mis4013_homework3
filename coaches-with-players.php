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
<?php

require_once("util-db.php");
require_once("model-coaches-with-players.php");


$pageTitle = "Coaches and Player Locations";
include "view/header.php";
$coaches = selectCoachesWithPlayers($_GET['id']);
include "view-coaches-with-players.php";
include "view/footer.php";
  ?>
</html>
