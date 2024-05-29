<?php
    include_once "../connect.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nazwa = $_POST['nazwa'];
        $cel = $_POST['cel'];
        $data_rozpoczecia = $_POST['data'];
        $opis = $_POST['opis'];
        
        $sql = "INSERT INTO Operacje_Wojskowe (nazwa, cel, data_rozpoczecia, opis,panstwo_id) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssd", $nazwa, $cel, $data_rozpoczecia, $opis,$_COOKIE["countryID"]);
        $stmt->execute();
    }
    
?>