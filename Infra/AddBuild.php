<?php
    include_once "../connect.php";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $nazwa = $_POST['nazwa'];
        $typ = $_POST['typ'];
    
        $stmt = $conn->prepare("INSERT INTO projekty_infrastrukturalne (nazwa, typ,panstwo_id) VALUES (?, ?, ?)");
        $stmt->bind_param("ssd", $nazwa, $typ,$_COOKIE["countryID"]);
        $stmt->execute();
        
    }    
?>