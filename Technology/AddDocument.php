<?php
    include_once "../connect.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $projekt_id = $_POST['projekt_id'];
        $wyniki = $_POST['wyniki'];
        $innowacje = $_POST['innowacje'];
        $data = $_POST['data'];
        
        $sql = "INSERT INTO Wyniki_Badawcze (projekt_id, data, wynik, wplyw) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("isss", $projekt_id, $data, $wyniki, $innowacje);
        $stmt->execute();
    }
    
?>