<?php
    include_once "../connect.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $rodzaj = $_POST['units'];
        $liczebnosc = $_POST['liczebnosc'];
        $gotowosc = $_POST['gotowosc'];
        
        $sql = "INSERT INTO jednostki_wojskowe (rodzaj, liczebnosc, stan_gotowosci,panstwo_id) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sisd", $rodzaj, $liczebnosc, $gotowosc,$_COOKIE["countryID"]);
        $stmt->execute();
    }    
?>