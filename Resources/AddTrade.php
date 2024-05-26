<?php
    include_once "../connect.php";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $towar = $_POST['towar'];
        $ilosc = $_POST['ilosc'];
        $cena = $_POST['cena'];
        $partner_handlowy = $_POST['partner_handlowy'];
        $data = $_POST['data'];
        $action = $_POST['action'];
    
        if ($action === 'create') {
            $stmt = $conn->prepare("INSERT INTO handel_miedzynarodowy (towar, ilosc, cena, partner_handlowy, data) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("sddss", $towar, $ilosc, $cena, $partner_handlowy, $data);
            $stmt->execute();
        } elseif ($action === 'update') {
            $stmt = $conn->prepare("UPDATE handel_miedzynarodowy SET towar = ?, ilosc = ?, cena = ?, partner_handlowy = ?, data = ? WHERE id = ?");
            $stmt->bind_param("sddssi", $towar, $ilosc, $cena, $partner_handlowy, $data, $id);
            $stmt->execute();
        } elseif ($action === 'delete') {
            $stmt = $conn->prepare("DELETE FROM handel_miedzynarodowy WHERE id = ?");
            $stmt->bind_param("i", $id);
            $stmt->execute();
        }
    }
        
?>