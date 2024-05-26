<?php
    include_once "../connect.php";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $nazwa = $_POST['nazwa'];
        $typ = $_POST['typ'];
        $ilosc = $_POST['ilosc'];
        $jednostka = $_POST['jednostka'];
        $action = $_POST['action'];
    
        if ($action === 'create') {
            $stmt = $conn->prepare("INSERT INTO zasoby (nazwa, typ, ilosc, jednostka) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssds", $nazwa, $typ, $ilosc, $jednostka);
            $stmt->execute();
        } elseif ($action === 'update') {
            $stmt = $conn->prepare("UPDATE zasoby SET nazwa = ?, typ = ?, ilosc = ?, jednostka = ? WHERE id = ?");
            $stmt->bind_param("ssdsi", $nazwa, $typ, $ilosc, $jednostka, $id);
            $stmt->execute();
        } elseif ($action === 'delete') {
            $stmt = $conn->prepare("DELETE FROM zasoby WHERE id = ?");
            $stmt->bind_param("i", $id);
            $stmt->execute();
        }
    }
?>