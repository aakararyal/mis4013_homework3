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
<?php

require_once("util-db.php");
require_once("model-players-by-team.php");


$pageTitle = "Players and NFL Teams";
include "view/header.php";
$playerteam = selectPlayersByTeam($_POST['cid']);
include "view-players-by-team.php";
include "view/footer.php";
  ?>

  
</html>
