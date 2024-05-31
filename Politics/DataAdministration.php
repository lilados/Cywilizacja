<?php
    header('Content-Type: application/json');
    require '../connect.php';

    $query = "SELECT nazwa, budzet FROM administracja";
    $result = $conn->query($query);

    $labels = [];
    $values = [];

    while ($row = $result->fetch_assoc()) {
        $labels[] = $row['nazwa'];
        $values[] = $row['budzet'];
    }

    echo json_encode(['labels' => $labels, 'values' => $values]);
?>
