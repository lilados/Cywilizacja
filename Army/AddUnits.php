<?php
include_once "../connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rodzaj = $_POST['units'];
    $liczebnosc = $_POST['liczebnosc'];
    $gotowosc = $_POST['gotowosc'];
    $countryID = $_COOKIE['countryID'];


    if (!isset($countryID) || !is_numeric($liczebnosc) || empty($rodzaj) || empty($gotowosc)) {
        echo "Invalid input.";
        exit;
    }

    $stmt = $conn->prepare("SELECT SUM(ilosc) FROM zasoby WHERE typ = 'zywnosc' AND panstwo_id = ? GROUP BY typ");
    $stmt->bind_param("i", $countryID);
    $stmt->execute();
    $stmt->bind_result($iloscJedzenia);
    $stmt->fetch();
    $stmt->close();


    if ($iloscJedzenia < $liczebnosc * 10) {
        echo "Not enough food.";
        exit;
    }


    $sql = "INSERT INTO jednostki_wojskowe (rodzaj, liczebnosc, stan_gotowosci, panstwo_id) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sisd", $rodzaj, $liczebnosc, $gotowosc, $countryID);
    $stmt->execute();
    $stmt->close();

    $negativeQuantity = -$liczebnosc * 10;
    $sql = "INSERT INTO zasoby (typ, ilosc, panstwo_id) VALUES ('zywnosc', ?, ?) 
            ON DUPLICATE KEY UPDATE ilosc = ilosc + VALUES(ilosc)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $negativeQuantity, $countryID);
    $stmt->execute();
    $stmt->close();}
?>