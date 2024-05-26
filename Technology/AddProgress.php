<?php
    include_once "../connect.php";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $projekt_id = $_POST['projekt_id'];
        $data = $_POST['data'];
        $opis = $_POST['opis'];
        $publikacje = $_POST['publikacje'];
        $nowe_technologie = $_POST['nowe_technologie'];
        $action = $_POST['action'];
    
        if ($action === 'create') {
            $stmt = $conn->prepare("INSERT INTO postepy_badawcze (projekt_id, data, opis, publikacje, nowe_technologie) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("issss", $projekt_id, $data, $opis, $publikacje, $nowe_technologie);
            $stmt->execute();
        } elseif ($action === 'update') {
            $stmt = $conn->prepare("UPDATE postepy_badawcze SET projekt_id = ?, data = ?, opis = ?, publikacje = ?, nowe_technologie = ? WHERE id = ?");
            $stmt->bind_param("issssi", $projekt_id, $data, $opis, $publikacje, $nowe_technologie, $id);
            $stmt->execute();
        } elseif ($action === 'delete') {
            $stmt = $conn->prepare("DELETE FROM postepy_badawcze WHERE id = ?");
            $stmt->bind_param("i", $id);
            $stmt->execute();
        }
    }
       
?>