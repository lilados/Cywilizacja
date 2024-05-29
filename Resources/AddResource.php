<?php
    include_once "../connect.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nazwa = $_POST['nazwa'];
        $typ = $_POST['typ'];
        $ilosc = $_POST['ilosc'];
        
        $sql = "INSERT INTO Zasoby (nazwa, typ, ilosc,panstwo_id) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssdd", $nazwa, $typ, $ilosc,$_COOKIE["countryID"]);
        $stmt->execute();
    }
    
?>