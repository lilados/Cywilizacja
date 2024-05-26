<?php
    include_once "../connect.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nazwa = $_POST['nazwa'];
    $typ = $_POST['typ'];
    $budzet = $_POST['budzet'];
    $action = $_POST['action'];

    if ($action === 'create') {
        $stmt = $conn->prepare("INSERT INTO administracja (nazwa, typ, budzet) VALUES (?, ?, ?)");
        $stmt->bind_param("ssd", $nazwa, $typ, $budzet);
        $stmt->execute();
    } elseif ($action === 'update') {
        $stmt = $conn->prepare("UPDATE administracja SET nazwa = ?, typ = ?, budzet = ? WHERE id = ?");
        $stmt->bind_param("ssdi", $nazwa, $typ, $budzet, $id);
        $stmt->execute();
    } elseif ($action === 'delete') {
        $stmt = $conn->prepare("DELETE FROM administracja WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
    }
}

?>