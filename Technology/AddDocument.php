<?php
    include_once "../connect.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $projekt_id = $_POST['projekt_id'];
        $wyniki = $_POST['wyniki'];
        $innowacje = $_POST['innowacje'];
        
        $sql = "INSERT INTO WynikiBadan (projekt_id, wyniki, innowacje) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("iss", $projekt_id, $wyniki, $innowacje);
        $stmt->execute();
    }
    
?>