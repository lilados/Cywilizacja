<?php
    include_once "connect.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nazwa = $_POST['nazwa'];
        $kwota = $_POST['kwota'];
        $cel = $_POST['cel'];
        
        $sql = "INSERT INTO WydatkiWojskowe (nazwa, kwota, cel) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sds", $nazwa, $kwota, $cel);
        $stmt->execute();
    }
    
?>