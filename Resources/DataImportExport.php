<?php
    header('Content-Type: application/json');
    require '../connect.php';

    $query = "SELECT data, wartosc FROM bilans order by data";
    $result = $conn->query($query);

    $labels = [];
    $values = [];

    while ($row = $result->fetch_assoc()) {
        $labels[] = $row['data'];
        $values[] = $row['wartosc'];
    }

    echo json_encode(['labels' => $labels, 'values' => $values]);
?>
