<?php
include_once "ChangeResources.html";
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Zasobów i Handlu</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body{
            background-color: white;
        }
    </style>
</head>
<body>
    <h1>Dashboard Zasobów i Handlu</h1>
    <canvas id="zasobyChart"></canvas>
    <canvas id="bilansHandlowyChart"></canvas>

    <script>
        // JavaScript do wyświetlania wykresów
        const ctx1 = document.getElementById('zasobyChart').getContext('2d');
        const ctx2 = document.getElementById('bilansHandlowyChart').getContext('2d');

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
