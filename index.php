<html>
<head>

    <style>
        body {
            background-image: url('https://cdn11.bigcommerce.com/s-jdhnct1/images/stencil/1280x1280/products/455/1218/football_stadium_horz__53833.1462478985.jpg?c=2');
            background-position: center;
            background-size: cover;
            color: white; 
            text-align: center;
        }
        
    </style>
    <?php
$pageTitle = "Home";
include "view/header.php";
  ?>
    <h1>Homework 4</h1>
   <?php
  include "view/footer.php";
  ?>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<?php

require_once("util-db.php");

$labels = [];
$values = [];

try {
    $conn = get_db_connection();
    $query = "SELECT division, COUNT(*) as count FROM football GROUP BY division";
    $result = $conn->query($query);

    while ($row = $result->fetch_assoc()) {
        $labels[] = $row['division'];
        $values[] = $row['count'];
    }

    $conn->close();
} catch (Exception $e) {
    echo '<p>Error fetching data: ' . $e->getMessage() . '</p>';
}
?>


<body>
    <h1>NFL Division Chart</h1>

    <canvas id="divisionChart" width="150" height="150" style = "max-width: 300px; maxheight: 300px; margin: auto;"></canvas>

    <script>
        const labels = [
            <?php foreach ($labels as $label) {
                echo "'$label',"; 
            } ?>
        ];

        const data = [
            <?php foreach ($values as $value) {
                echo "$value,"; 
             } ?>
        ];

        
        const ctx = document.getElementById('divisionChart');
        new Chart(ctx, {
            type: 'pie', 
            data: {
                labels: labels, 
                datasets: [{
                    label: 'Number of Players',
                    data: data,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 206, 86, 0.6)',
                        'rgba(75, 192, 192, 0.6)',
                        'rgba(153, 102, 255, 0.6)',
                        'rgba(255, 159, 64, 0.6)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true, 
                plugins: {
                    legend: {
                        position: 'top' 
                    }
                }
            }
        });
    </script>
</body>
</html>
