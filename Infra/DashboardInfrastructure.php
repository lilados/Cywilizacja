<?php
include_once "ChangeInfra.html"; 
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Infrastruktura</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .chart-container {
            position: relative;
            width: 80%;
            margin: auto;
        }
        body{
            background-color: white;
        }
    </style>
</head>
<body>
    <div class="chart-container">
        <canvas id="infrastrukturaChart"></canvas>
    </div>
    <script>
        const ctx = document.getElementById('infrastrukturaChart').getContext('2d');
        fetch('DataBuildings.php')
            .then(response => response.json())
            .then(data => {
                new Chart(ctx, {
                    type: 'pie',
                    data: {
                        labels: data.labels,
                        datasets: [{
                            label: 'Budynki',
                            data: data.values,
                            backgroundColor: 'rgba(153, 102, 255, 0.2)',
                            borderColor: 'rgba(153, 102, 255, 1)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            } }
                    } }); });
    </script>
</body>
</html>
