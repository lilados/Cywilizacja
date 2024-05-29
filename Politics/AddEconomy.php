<?php
    include_once "../connect.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $typ_wskaznika = $_POST['typ_wskaznika'];
        $wartosc = $_POST['wartosc'];
        $data = $_POST['data'];
        
        $sql = "INSERT INTO wskazniki (typ, wartosc,data,panstwo_id) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sdsd", $typ_wskaznika, $wartosc, $data,$_COOKIE["countryID"]);
        $stmt->execute();
    }    

?>