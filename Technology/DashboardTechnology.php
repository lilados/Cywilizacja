<?php
include_once "ChangeTechnology.html";
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Wojskowy</title>
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
        <canvas id="naukowyChart"></canvas>
    </div>
    <script>
        const ctx = document.getElementById('naukowyChart').getContext('2d');
        const chartData = {
            labels: ['Armia', 'Szkolnictwo'],
            datasets: [
                {
                    label: 'Liczba projektów',
                    data: [300, 250],
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1,
                },
                {
                    label: 'Wydatki',
                    data: [36555, 20400],
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1,
                }
            ],
        };

        const naukowyChart = new Chart(ctx, {
            type: 'bar',
            data: chartData,
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                    },
                },
            },
        });
    </script>
</body>
</html>