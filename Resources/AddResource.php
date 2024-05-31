<?php
    include_once "../connect.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nazwa = $_POST['typ'];
        $ilosc = $_POST['ilosc'];
        
        $sql = "INSERT INTO Zasoby ( nazwa, ilosc,panstwo_id) VALUES ( ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sdd", $nazwa, $ilosc,$_COOKIE["countryID"]);
        $stmt->execute();
    }
    
?>