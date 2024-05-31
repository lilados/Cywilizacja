<?php
    include_once "../connect.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nazwa = $_POST['typ'];
        $ilosc = $_POST['ilosc'];
        
        $sql = "INSERT INTO Zasoby ( typ, ilosc,panstwo_id) VALUES ( ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sdd", $nazwa, $ilosc,$_COOKIE["countryID"]);
        $stmt->execute();
    }
    $query = "SELECT typ, sum(ilosc) FROM zasoby where panstwo_id = ".$_COOKIE['countryID']." group by typ;";
    $result = $conn->query($query);

    $labels = [];
    $values = [];

    while ($row = $result->fetch_assoc()) {
        $labels[] = $row['typ'];
        $values[] = $row['sum(ilosc)'];
    }

    echo json_encode(['labels' => $labels, 'values' => $values]);

?>