<?php
    include_once "connect.php";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $projekt_id = $_POST['projekt_id'];
        $data = $_POST['data'];
        $opis = $_POST['opis'];
        $stan_techniczny = $_POST['stan_techniczny'];
        $action = $_POST['action'];
    
        if ($action === 'create') {
            $stmt = $conn->prepare("INSERT INTO postepy_budowy (projekt_id, data, opis, stan_techniczny) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("isss", $projekt_id, $data, $opis, $stan_techniczny);
            $stmt->execute();
        } elseif ($action === 'update') {
            $stmt = $conn->prepare("UPDATE postepy_budowy SET projekt_id = ?, data = ?, opis = ?, stan_techniczny = ? WHERE id = ?");
            $stmt->bind_param("isssi", $projekt_id, $data, $opis, $stan_techniczny, $id);
            $stmt->execute();
        } elseif ($action === 'delete') {
            $stmt = $conn->prepare("DELETE FROM postepy_budowy WHERE id = ?");
            $stmt->bind_param("i", $id);
            $stmt->execute();
        }
    }    
?>