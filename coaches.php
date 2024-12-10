
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

  ?>

<h2>Coaches</h2>
<input type="text" id="myInput" onkeyup="filterList()" placeholder="Search for coaches...">
<ul id="myUL">
    <?php foreach ($coaches as $coach): ?>
        <li>
            <?= $coach['coaches_name'] ?> - <?= $coach['office_location'] ?>
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

<?php include "view/footer.php"; ?>
</body>
</html>
