<?php
include_once "ChangeTechnology.html";
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Nauka i Technologia</title>
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
        <canvas id="naukaChart"></canvas>
        <canvas id="naukaChart"></canvas>
    </div>
    <script>
        const ctx = document.getElementById('naukaChart').getContext('2d');
        const ct2 = document.getElementById('naukaChart').getContext('2d');
        
        
        fetch('DataResource.php')
            .then(response => response.json())
            .then(data => {
                new Chart(ctx1, {
                    type: 'bar',
                    data: {
                        labels: data.labels,
                        datasets: [{
                            label: 'Zasoby',
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

        fetch('DataImportExport.php')
            .then(response => response.json())
            .then(data => {
                new Chart(ctx2, {
                    type: 'line',
                    data: {
                        labels: data.labels,
                        datasets: [{
                            label: 'Bilans Handlowy',
                            data: data.values,
                            backgroundColor: 'rgba(153, 102, 255, 0.2)',
                            borderColor: 'rgba(153, 102, 255, 1)',
                            borderWidth: 1
                        }]},options: {scales: {y: {beginAtZero: true}}} }); });
    </script>
</body>
</html>
