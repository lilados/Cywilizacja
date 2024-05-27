<?php
    include_once "../connect.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ministerstwo = $_POST['ministerstwo'];
        $budzet = $_POST['budzet'];
        
        $sql = "INSERT INTO Administracja (ministerstwo, budzet) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sd", $ministerstwo, $budzet);
        $stmt->execute();
    }    
?>