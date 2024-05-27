<?php
    include_once "connect.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nazwa = $_POST['nazwa'];
        $cel = $_POST['cel'];
        $zasoby_wymagane = $_POST['zasoby_wymagane'];
        $harmonogram = $_POST['harmonogram'];
        
        $sql = "INSERT INTO OperacjeWojskowe (nazwa, cel, zasoby_wymagane, harmonogram) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $nazwa, $cel, $zasoby_wymagane, $harmonogram);
        $stmt->execute();
    }
    
?>