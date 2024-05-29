<?php
    include_once "../connect.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $rodzaj = $_POST['rodzaj'];
        $liczebnosc = $_POST['liczebnosc'];
        $wyposazenie = $_POST['wyposazenie'];
        $gotowosc = $_POST['gotowosc'];
        
        $sql = "INSERT INTO Jednostki_Wojskowe (rodzaj, liczebnosc, wyposazenie, stan_gotowosci,panstwo_id) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sissd", $rodzaj, $liczebnosc, $wyposazenie, $gotowosc,$_COOKIE["countryID"]);
        $stmt->execute();
    }    
?>