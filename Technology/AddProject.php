<?php
    include_once "../connect.php";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $nazwa = $_POST['nazwa'];
        $cel = $_POST['cel'];
        $zasoby = $_POST['zasoby'];
        $harmonogram = $_POST['harmonogram'];
        $action = $_POST['action'];
    
        if ($action === 'create') {
            $stmt = $conn->prepare("INSERT INTO projekty_badawcze (nazwa, cel, zasoby, harmonogram) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $nazwa, $cel, $zasoby, $harmonogram);
            $stmt->execute();
        } elseif ($action === 'update') {
            $stmt = $conn->prepare("UPDATE projekty_badawcze SET nazwa = ?, cel = ?, zasoby = ?, harmonogram = ? WHERE id = ?");
            $stmt->bind_param("ssssi", $nazwa, $cel, $zasoby, $harmonogram, $id);
            $stmt->execute();
        } elseif ($action === 'delete') {
            $stmt = $conn->prepare("DELETE FROM projekty_badawcze WHERE id = ?");
            $stmt->bind_param("i", $id);
            $stmt->execute();
        }
    }    
?>