<?php
    include_once "../connect.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ministerstwo = $_POST['ministerstwo'];
        $budzet = $_POST['budzet'];
        
        $sql = "INSERT INTO administracja (nazwa, budzet, panstwo_id) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sdd", $ministerstwo, $budzet,$_COOKIE['countryID']);
        $stmt->execute();
    }    
?>