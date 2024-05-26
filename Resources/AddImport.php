<?php
    include_once "../connect.php";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $typ = $_POST['typ'];
        $kraj = $_POST['kraj'];
        $wartosc = $_POST['wartosc'];
        $data = $_POST['data'];
        $action = $_POST['action'];

        if ($action === 'create') {
            $stmt = $conn->prepare("INSERT INTO handel (typ, kraj, wartosc, data) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssds", $typ, $kraj, $wartosc, $data);
            $stmt->execute();
        } elseif ($action === 'update') {
            $stmt = $conn->prepare("UPDATE handel SET typ = ?, kraj = ?, wartosc = ?, data = ? WHERE id = ?");
            $stmt->bind_param("ssdsi", $typ, $kraj, $wartosc, $data, $id);
            $stmt->execute();
        } elseif ($action === 'delete') {
            $stmt = $conn->prepare("DELETE FROM handel WHERE id = ?");
            $stmt->bind_param("i", $id);
            $stmt->execute();
        }
    }
?>