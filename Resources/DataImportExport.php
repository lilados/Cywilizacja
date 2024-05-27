<?php
    header('Content-Type: application/json');
    require '../connect.php';

    $query = "SELECT towar, sum(ilosc) FROM ImportEksport group by towar";
    $result = $conn->query($query);

    $labels = [];
    $values = [];

    while ($row = $result->fetch_assoc()) {
        $labels[] = $row['towar'];
        $values[] = $row['sum(ilosc)'];
    }

    echo json_encode(['labels' => $labels, 'values' => $values]);
?>
