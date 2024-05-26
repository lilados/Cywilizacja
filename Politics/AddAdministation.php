<?php
    include_once "../connect.php";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $typ = $_POST['typ'];
        $wartosc = $_POST['wartosc'];
        $data = $_POST['data'];
        $action = $_POST['action'];

        if ($action === 'create') {
            $stmt = $conn->prepare("INSERT INTO wskazniki (typ, wartosc, data) VALUES (?, ?, ?)");
            $stmt->bind_param("sds", $typ, $wartosc, $data);
            $stmt->execute();
        } elseif ($action === 'update') {
            $stmt = $conn->prepare("UPDATE wskazniki SET typ = ?, wartosc = ?, data = ? WHERE id = ?");
            $stmt->bind_param("sdsi", $typ, $wartosc, $data, $id);
            $stmt->execute();
        } elseif ($action === 'delete') {
            $stmt = $conn->prepare("DELETE FROM wskazniki WHERE id = ?");
            $stmt->bind_param("i", $id);
            $stmt->execute();
        }
    }
?>