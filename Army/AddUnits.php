<?php
    include_once "connect.php";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $nazwa = $_POST['nazwa'];
        $rodzaj = $_POST['rodzaj'];
        $liczebnosc = $_POST['liczebnosc'];
        $wyposazenie = $_POST['wyposazenie'];
        $stan_gotowosci = $_POST['stan_gotowosci'];
        $action = $_POST['action'];
    
        if ($action === 'create') {
            $stmt = $conn->prepare("INSERT INTO jednostki_wojskowe (nazwa, rodzaj, liczebnosc, wyposazenie, stan_gotowosci) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("ssiss", $nazwa, $rodzaj, $liczebnosc, $wyposazenie, $stan_gotowosci);
            $stmt->execute();
        } elseif ($action === 'update') {
            $stmt = $conn->prepare("UPDATE jednostki_wojskowe SET nazwa = ?, rodzaj = ?, liczebnosc = ?, wyposazenie = ?, stan_gotowosci = ? WHERE id = ?");
            $stmt->bind_param("ssissi", $nazwa, $rodzaj, $liczebnosc, $wyposazenie, $stan_gotowosci, $id);
            $stmt->execute();
        } elseif ($action === 'delete') {
            $stmt = $conn->prepare("DELETE FROM jednostki_wojskowe WHERE id = ?");
            $stmt->bind_param("i", $id);
            $stmt->execute();
        }
    }    
?>