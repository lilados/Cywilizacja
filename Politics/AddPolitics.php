<?php
    include_once "../connect.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nazwa = $_POST['nazwa'];
        $kategoria = $_POST['kategoria'];
        $opis = $_POST['opis'];
        
        $sql = "INSERT INTO Polityki (nazwa, kategoria, opis) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $nazwa, $kategoria, $opis);
        $stmt->execute();
    }
    
?>