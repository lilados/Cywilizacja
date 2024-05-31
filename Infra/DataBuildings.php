<?php
    header('Content-Type: application/json');
    require '../connect.php';

    $query = "SELECT typ, sum(ilosc) FROM projekty_infrastrukturalne where panstwo_id = ".$_COOKIE['countryID']." group by typ";
    $result = $conn->query($query);

    $labels = [];
    $values = [];

    while ($row = $result->fetch_assoc()) {
        $labels[] = $row['typ'];
        $values[] = $row['sum(ilosc)'];
    }

    echo json_encode(['labels' => $labels, 'values' => $values]);
?>
