<?php
    header('Content-Type: application/json');
    require '../connect.php';

    $query = "SELECT nazwa, sum(ilosc) FROM zasoby group by nazwa";
    $result = $conn->query($query);

    $labels = [];
    $values = [];

    while ($row = $result->fetch_assoc()) {
        $labels[] = $row['nazwa'];
        $values[] = $row['sum(ilosc)'];
    }

    echo json_encode(['labels' => $labels, 'values' => $values]);
?>
