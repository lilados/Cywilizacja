<?php
    include_once "../connect.php";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $projekt_id = $_POST['projekt_id'];
        $data = $_POST['data'];
        $opis = $_POST['opis'];
    
        $stmt = $conn->prepare("INSERT INTO postepy_budowy (projekt_id, data, postep) VALUES (?, ?, ?)");
        $stmt->bind_param("iss", $projekt_id, $data, $opis);
        $stmt->execute();
        
    }    
?>