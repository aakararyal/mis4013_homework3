<html>
<body>
    <script>
document.body.style.backgroundColor = "lightblue";

</script>
<?php
$pageTitle = "Home";
include "view-header.php";
  ?>
    <h1>Project</h1>

<canvas id="divisionChart"></canvas>
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
                    text: 'Number of Coaches by Division'
                }
            }
        }
    });
</script>




    
   <?php
  include "view-footer.php";
  ?>
</body>
</html>
