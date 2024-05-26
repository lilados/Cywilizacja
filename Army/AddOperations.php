<?php
    include_once "connect.php";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $nazwa = $_POST['nazwa'];
        $data_rozpoczecia = $_POST['data_rozpoczecia'];
        $data_zakonczenia = $_POST['data_zakonczenia'];
        $cel = $_POST['cel'];
        $status = $_POST['status'];
        $action = $_POST['action'];
    
        if ($action === 'create') {
            $stmt = $conn->prepare("INSERT INTO operacje_wojskowe (nazwa, data_rozpoczecia, data_zakonczenia, cel, status) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("sssss", $nazwa, $data_rozpoczecia, $data_zakonczenia, $cel, $status);
            $stmt->execute();
        } elseif ($action === 'update') {
            $stmt = $conn->prepare("UPDATE operacje_wojskowe SET nazwa = ?, data_rozpoczecia = ?, data_zakonczenia = ?, cel = ?, status = ? WHERE id = ?");
            $stmt->bind_param("sssssi", $nazwa, $data_rozpoczecia, $data_zakonczenia, $cel, $status, $id);
            $stmt->execute();
        } elseif ($action === 'delete') {
            $stmt = $conn->prepare("DELETE FROM operacje_wojskowe WHERE id = ?");
            $stmt->bind_param("i", $id);
            $stmt->execute();
        }
    }
    
?>