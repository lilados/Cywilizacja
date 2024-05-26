<?php
    include_once "../connect.php";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $projekt_id = $_POST['projekt_id'];
        $data = $_POST['data'];
        $wyniki = $_POST['wyniki'];
        $innowacje = $_POST['innowacje'];
        $wplyw_na_rozwoj = $_POST['wplyw_na_rozwoj'];
        $action = $_POST['action'];
    
        if ($action === 'create') {
            $stmt = $conn->prepare("INSERT INTO wyniki_badan (projekt_id, data, wyniki, innowacje, wplyw_na_rozwoj) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("issss", $projekt_id, $data, $wyniki, $innowacje, $wplyw_na_rozwoj);
            $stmt->execute();
        } elseif ($action === 'update') {
            $stmt = $conn->prepare("UPDATE wyniki_badan SET projekt_id = ?, data = ?, wyniki = ?, innowacje = ?, wplyw_na_rozwoj = ? WHERE id = ?");
            $stmt->bind_param("issssi", $projekt_id, $data, $wyniki, $innowacje, $wplyw_na_rozwoj, $id);
            $stmt->execute();
        } elseif ($action === 'delete') {
            $stmt = $conn->prepare("DELETE FROM wyniki_badan WHERE id = ?");
            $stmt->bind_param("i", $id);
            $stmt->execute();
        }
    }
?>