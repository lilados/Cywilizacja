<?php
    include_once "../connect.php";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $nazwa = $_POST['nazwa'];
        $typ = $_POST['typ'];
        $ilosc = $_POST['ilosc'];
    
        $iloscDrewna= mysqli_fetch_array(mysqli_query($conn,"Select sum(ilosc) from zasoby where typ like '_rewno' and panstwo_id = $_COOKIE[countryID] group by typ"))[0];

        if ($iloscDrewna < $ilosc*20) return;

        $stmt = $conn->prepare("INSERT INTO projekty_infrastrukturalne (nazwa,ilosc, typ,panstwo_id) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("sisd", $nazwa, $ilosc, $typ,$_COOKIE["countryID"]);
        $stmt->execute();
        
        $s = "INSERT INTO zasoby (typ, ilosc, panstwo_id) VALUES ('drewno', -$ilosc * 20, $_COOKIE[countryID])";
        $st = mysqli_query($conn,$s);
    }    
?>