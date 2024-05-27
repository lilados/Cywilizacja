<?php
    include_once "connect.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $rodzaj = $_POST['rodzaj'];
        $liczebnosc = $_POST['liczebnosc'];
        $wyposazenie = $_POST['wyposazenie'];
        $gotowosc = $_POST['gotowosc'];
        
        $sql = "INSERT INTO JednostkiWojskowe (rodzaj, liczebnosc, wyposazenie, gotowosc) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("siss", $rodzaj, $liczebnosc, $wyposazenie, $gotowosc);
        $stmt->execute();
    }    
?>