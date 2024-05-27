<?php
    include_once "../connect.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $typ_umowy = $_POST['typ_umowy'];
        $towar = $_POST['towar'];
        $ilosc = $_POST['ilosc'];
        $cena = $_POST['cena'];
        $partner_handlowy = $_POST['partner_handlowy'];
        
        $sql = "INSERT INTO ImportEksport (typ_umowy, towar, ilosc, cena, partner_handlowy) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssdds", $typ_umowy, $towar, $ilosc, $cena, $partner_handlowy);
        $stmt->execute();
    }
    
?>