<?php
    header('Content-Type: application/json');
    require '../connect.php';

    $query = "SELECT ministerstwo, budzet FROM budzety_ministerstw";
    $result = $conn->query($query);

    $labels = [];
    $values = [];

    while ($row = $result->fetch_assoc()) {
        $labels[] = $row['ministerstwo'];
        $values[] = $row['budzet'];
    }

    echo json_encode(['labels' => $labels, 'values' => $values]);
?>
