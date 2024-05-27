<?php
    include_once "../connect.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $typ_wskaznika = $_POST['typ_wskaznika'];
        $wartosc = $_POST['wartosc'];
        
        $sql = "INSERT INTO Wskazniki (typ_wskaznika, wartosc) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sd", $typ_wskaznika, $wartosc);
        $stmt->execute();
    }    

?>