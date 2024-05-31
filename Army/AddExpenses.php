<?php
    include_once "../connect.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nazwa = $_POST['expense'];
        $kwota = $_POST['kwota'];
        $data = $_POST['data'];
        
        $sql = "INSERT INTO Wydatki_Wojskowe (rodzaj, kwota, data,panstwo_id) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sdsd", $nazwa, $kwota, $data,$_COOKIE["countryID"]);
        $stmt->execute();
    }
    
?>