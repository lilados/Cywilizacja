<?php
    include_once "connect.php";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $data = $_POST['data'];
        $kategoria = $_POST['kategoria'];
        $kwota = $_POST['kwota'];
        $opis = $_POST['opis'];
        $action = $_POST['action'];
    
        if ($action === 'create') {
            $stmt = $conn->prepare("INSERT INTO wydatki_wojskowe (data, kategoria, kwota, opis) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssds", $data, $kategoria, $kwota, $opis);
            $stmt->execute();
        } elseif ($action === 'update') {
            $stmt = $conn->prepare("UPDATE wydatki_wojskowe SET data = ?, kategoria = ?, kwota = ?, opis = ? WHERE id = ?");
            $stmt->bind_param("ssds", $data, $kategoria, $kwota, $opis, $id);
            $stmt->execute();
        } elseif ($action === 'delete') {
            $stmt = $conn->prepare("DELETE FROM wydatki_wojskowe WHERE id = ?");
            $stmt->bind_param("i", $id);
            $stmt->execute();
        }
    }    
?>