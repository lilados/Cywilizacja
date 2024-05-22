<?php
    include_once "connect.php";


    $building = $_GET['building'];
    $amount = $_GET['amount'];


    $q = "INSERT INTO buildings (id, building, amount) VALUES (NULL, '$building', '$amount')
      ON DUPLICATE KEY UPDATE amount = amount + VALUES(amount)";

    $checkQuery = "SELECT id, amount FROM buildings WHERE building = '$building'";

    $result = mysqli_query($conn, $checkQuery);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $newAmount = $row['amount'] + $amount;
        $id = $row['id'];
        $updateQuery = "UPDATE buildings SET amount = $newAmount WHERE id = $id";
        mysqli_query($conn, $updateQuery);
    } else {
        $insertQuery = "INSERT INTO buildings (id, building, amount) VALUES (NULL, '$building', '$amount')";
        mysqli_query($conn, $insertQuery);
    }
    echo "Dodano $building w ilosci $amount dla twojej cywilizacji";
?>