<?php
    include_once "../connect.php";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $rok = $_POST['rok'];
        $import_wartosc = $_POST['bilans'];
        $action = $_POST['action'];

        echo $rok;

        if ($action === 'create') {
            $stmt = $conn->prepare("INSERT INTO bilanse_handlowe (data, bilans) VALUES (?, ?)");
            $stmt->bind_param("sd", $rok, $import_wartosc);
            $stmt->execute();
        } elseif ($action === 'update') {
            $stmt = $conn->prepare("UPDATE bilanse_handlowe SET data = '?', bilans = ? WHERE id = ?");
            $stmt->bind_param("sdi", $rok, $import_wartosc, $id);
            $stmt->execute();
        } elseif ($action === 'delete') {
            $stmt = $conn->prepare("DELETE FROM bilanse_handlowe WHERE id = ?");
            $stmt->bind_param("i", $id);
            $stmt->execute();
        }
    }
?>