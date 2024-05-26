<?php
    include_once "../connect.php";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $nazwa = $_POST['nazwa'];
        $typ = $_POST['typ'];
        $opis = $_POST['opis'];
        $action = $_POST['action'];
    
        if ($action === 'create') {
            $stmt = $conn->prepare("INSERT INTO polityki (nazwa, typ, opis) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $nazwa, $typ, $opis);
            $stmt->execute();
        } elseif ($action === 'update') {
            $stmt = $conn->prepare("UPDATE polityki SET nazwa = ?, typ = ?, opis = ? WHERE id = ?");
            $stmt->bind_param("sssi", $nazwa, $typ, $opis, $id);
            $stmt->execute();
        } elseif ($action === 'delete') {
            $stmt = $conn->prepare("DELETE FROM polityki WHERE id = ?");
            $stmt->bind_param("i", $id);
            $stmt->execute();
        }
    }
?>