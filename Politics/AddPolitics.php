<?php
    include_once "../connect.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nazwa = $_POST['nazwa'];
        $kategoria = $_POST['kategoria'];
        $opis = $_POST['opis'];
        
        $sql = "INSERT INTO Polityki (nazwa, typ, opis,panstwo_id) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssd", $nazwa, $kategoria, $opis,$_COOKIE["countryID"]);
        $stmt->execute();
    }
    
?>