<?php
    include_once "connect.php";


    $ilosc = $_GET['moneyAmount'];


    $q = "Update kasa set amount='$ilosc' where id='1'";

    $conn->query($q);

    echo "Dodano $ilosc kasy dla twojej cywilizacji";
?>