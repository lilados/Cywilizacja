<?php
    include_once "../connect.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $towar = $_POST['towar'];
        $ilosc = $_POST['ilosc'];
        $cena = $_POST['cena'];
        $partner_handlowy = $_POST['partner_handlowy'];
        
        $sql = "INSERT INTO Handel (towar, ilosc, cena, partner_handlowy,panstwo_id) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sddsd", $towar, $ilosc, $cena, $partner_handlowy,$_COOKIE["countryID"]);
        $stmt->execute();
    }
?>              