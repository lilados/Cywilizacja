<?php 
include_once "ChangePolitics.html";
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Polityka i Administracja</title>
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
        <canvas id="administracjaChart"></canvas>
        <canvas id="politykaChart"></canvas>
    </div>

    <script>
        const ctx = document.getElementById('administracjaChart').getContext('2d');
        const ctx2 = document.getElementById('politykaChart').getContext('2d');
        fetch('DataAdministration.php')
            .then(response => response.json())
            .then(data => {
                new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: data.labels,
                        datasets: [{
                            label: 'Administracje',
                            data: data.values,
                            backgroundColor: 'rgba(0, 0, 0, 0.2)',
                            borderColor: 'rgba(75, 192, 192, 1)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            });
            fetch('DataEconomy.php')
            .then(response => response.json())
            .then(data => {
                new Chart(ctx2, {
                    type: 'pie',
                    data: {
                        labels: data.labels,
                        datasets: [{
                            label: 'Administracje',
                            data: data.values,
                            backgroundColor: 'rgba(0, 0, 0, 0.2)',
                            borderColor: 'rgba(75, 192, 192, 1)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            });
    </script>
</body>
</html>
