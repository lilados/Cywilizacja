<?php
    include_once "../connect.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nazwa = $_POST['nazwa'];
        $cele = $_POST['cele'];
        $zasoby_potrzebne = $_POST['zasoby_potrzebne'];
        $harmonogram = $_POST['harmonogram'];
        
        $sql = "INSERT INTO Projekty_Badawcze (nazwa, cel, zasoby_potrzebne, harmonogram,panstwo_id) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssd", $nazwa, $cele, $zasoby_potrzebne, $harmonogram,$_COOKIE["countryID"]);
        $stmt->execute();
    }
    
?>