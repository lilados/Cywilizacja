<?php
    include_once "../connect.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nazwa = $_POST['nazwa'];
        $cele = $_POST['cele'];
        $zasoby_potrzebne = $_POST['zasoby_potrzebne'];
        $harmonogram = $_POST['harmonogram'];
        
        $sql = "INSERT INTO ProjektyBadawcze (nazwa, cele, zasoby_potrzebne, harmonogram) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $nazwa, $cele, $zasoby_potrzebne, $harmonogram);
        $stmt->execute();
    }
    
?>