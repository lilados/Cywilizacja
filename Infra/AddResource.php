<?php
    include_once "../connect.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $projekt_id = $_POST['projekt_id'];
        $zasob = $_POST['zasob'];
        $ilosc = $_POST['ilosc'];
        $jednostka = $_POST['jednostka'];
        
        $sql = "INSERT INTO zasoby_infrastrukturalne (projekt_id, zasob, ilosc, jednostka) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("dsds", $projekt_id, $zasob, $ilosc, $jednostka);
        $stmt->execute();
    }
?>