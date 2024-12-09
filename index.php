
<?php

require_once("util-db.php");

$labels = [];
$values = [];

try {

$conn = get_db_connection();

$query = "SELECT division, count(*) as count from football group by division"; //check to change
 $result = $conn-> query($query);  // check to change

    while ($row = $result->fetch_assoc()) {
        $labels[] = $row['division'];
        $values[] = $row['count'];
    }

    $conn-> close();

}
    catch (Exception $e) {
        throw $e;
    }
    ?>

    
<html>

    <head>
<style>
    body {
        background-image: url('https://cdn11.bigcommerce.com/s-jdhnct1/images/stencil/1280x1280/products/455/1218/football_stadium_horz__53833.1462478985.jpg?c=2');        background-position: center;
    }
</style>


        
    </head>
<body>
   
<?php
$pageTitle = "Home";
include "view/header.php";
  ?>
    <h1>NFL Division Chart</h1>

    <canvas id = "divisionChart" width = "400" height = "400"></canvas>

    <script>

        const labels = [
            <?php foreach ($labels as $label) {
      echo ";$label',";
  } ?>

            ];

        const data = [
            <?php foreach ($values as $value) {
      echo "$value,";
      } ?>
      ];


      const ctx = document.getElementByID('myChart')
      new Chart (ctx, {
      type: pie',
      data: {
      labels: labels,
      datasets: [{
          label: 'Number of Players',
          data: data,
          backgroundColor: [
              ],
          borderColor: [
              ],
          borderWidth: 1
      }]
      },
      });
        
    </script>

    
   <?php
  include "view/footer.php";
  ?>
</body>
</html>
