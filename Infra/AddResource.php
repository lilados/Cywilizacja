<?php
    include_once "connect.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nazwa = $_POST['nazwa'];
        $typ = $_POST['typ'];
        $zasoby_potrzebne = $_POST['zasoby_potrzebne'];
        $harmonogram = $_POST['harmonogram'];
        
        $sql = "INSERT INTO ProjektyInfrastrukturalne (nazwa, typ, zasoby_potrzebne, harmonogram) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $nazwa, $typ, $zasoby_potrzebne, $harmonogram);
        $stmt->execute();
    }
?>