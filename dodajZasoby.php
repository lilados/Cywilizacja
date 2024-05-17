<?php
    include_once "connect.php";

    $rodzaj = $_GET['resource'];
    $ilosc = $_GET['amount'];


    $q = "Insert into Zasoby Values(NULL,'$rodzaj','$ilosc')";

    $conn->query($q);

    echo "Dodano $ilosc zasobow o nazwie '$rodzaj'";
?>