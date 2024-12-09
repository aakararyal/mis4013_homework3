<html>

    <head>
<style>
    body {
        background-image: url('https://cdn11.bigcommerce.com/s-jdhnct1/images/stencil/1280x1280/products/455/1218/football_stadium_horz__53833.1462478985.jpg?c=2');
        background-repeat: no repeat;
        background-position: center;
    }
</style>


        
    </head>
<body>
    <script>
document.body.style.backgroundColor = "lightblue";

</script>
<?php
$pageTitle = "Home";
include "view/header.php";
  ?>
    <h1>Project</h1>

    <div style = "background-color: rgba(255, 255, 255, 0.8); padding: 20px; border-radius: 10px; width: 80%; margin: auto;">
<canvas id="divisionChart"></canvas> </div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('divisionChart').getContext('2d');
    const divisionChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['NFC South', 'AFC South'], 
            datasets: [{
                label: 'Number of Coaches',
                data: [3, 2], 
                backgroundColor: [
                    'rgba(75, 192, 192, 0.5)',
                    'rgba(153, 102, 255, 0.5)'
                ],
                borderColor: [
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            },
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Number of Players by Division'
                }
            }
        }
    });
</script>




    
   <?php
  include "view/footer.php";
  ?>
</body>
</html>
