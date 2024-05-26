<?php
    include_once "connect.php";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $nazwa = $_POST['nazwa'];
        $typ = $_POST['typ'];
        $lokalizacja = $_POST['lokalizacja'];
        $data_rozpoczecia = $_POST['data_rozpoczecia'];
        $data_zakonczenia = $_POST['data_zakonczenia'];
        $status = $_POST['status'];
        $action = $_POST['action'];
    
        if ($action === 'create') {
            $stmt = $conn->prepare("INSERT INTO projekty_infrastrukturalne (nazwa, typ, lokalizacja, data_rozpoczecia, data_zakonczenia, status) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssss", $nazwa, $typ, $lokalizacja, $data_rozpoczecia, $data_zakonczenia, $status);
            $stmt->execute();
        } elseif ($action === 'update') {
            $stmt = $conn->prepare("UPDATE projekty_infrastrukturalne SET nazwa = ?, typ = ?, lokalizacja = ?, data_rozpoczecia = ?, data_zakonczenia = ?, status = ? WHERE id = ?");
            $stmt->bind_param("ssssssi", $nazwa, $typ, $lokalizacja, $data_rozpoczecia, $data_zakonczenia, $status, $id);
            $stmt->execute();
        } elseif ($action === 'delete') {
            $stmt = $conn->prepare("DELETE FROM projekty_infrastrukturalne WHERE id = ?");
            $stmt->bind_param("i", $id);
            $stmt->execute();
        }
    }    
?>