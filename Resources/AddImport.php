<?php
    include_once "../connect.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $wartosc = $_POST['wartosc'];
        $data = $_POST['data'];
        
        $sql = "INSERT INTO bilans (wartosc, data,panstwo_id) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("dsd", $wartosc, $data,$_COOKIE["countryID"]);
        $stmt->execute();
    }
    
?>