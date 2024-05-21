<?php
    include_once "connect.php";


    $unit = $_GET['unit'];
    $amount = $_GET['amount'];


    $q = "INSERT INTO army (id, unit, amount) VALUES (NULL, '$unit', '$amount')
      ON DUPLICATE KEY UPDATE amount = amount + VALUES(amount)";

    $checkQuery = "SELECT id, amount FROM army WHERE unit = '$unit'";

    $result = mysqli_query($conn, $checkQuery);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $newAmount = $row['amount'] + $amount;
        $id = $row['id'];
        $updateQuery = "UPDATE army SET amount = $newAmount WHERE id = $id";
        mysqli_query($conn, $updateQuery);
    } else {
        $insertQuery = "INSERT INTO army (id, unit, amount) VALUES (NULL, '$unit', '$amount')";
        mysqli_query($conn, $insertQuery);
    }
    echo "Dodano $unit w ilosci $amount dla twojej cywilizacji";
?>