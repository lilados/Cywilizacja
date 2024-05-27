<?php
    header('Content-Type: application/json');
    require '../connect.php';

    $query = "SELECT typ, wartosc FROM wskazniki";
    $result = $conn->query($query);

    $labels = [];
    $values = [];

    while ($row = $result->fetch_assoc()) {
        $labels[] = $row['typ'];
        $values[] = $row['wartosc'];
    }

    echo json_encode(['labels' => $labels, 'values' => $values]);
?>
