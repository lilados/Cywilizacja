<?php
    include_once "../connect.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $towar = $_POST['towar'];
        $ilosc = $_POST['ilosc'];
        $cena = $_POST['cena'];
        $partner_handlowy = $_POST['partner_handlowy'];
        $partnerzy = ["Underwoodland","Wronis","Masuria","Janczland"];
        
        $iloscZasobu = mysqli_fetch_array(mysqli_query($conn,"Select sum(ilosc) from zasoby where typ like '$towar' and panstwo_id = $_COOKIE[countryID] group by typ"))[0];
        $iloscKasy = mysqli_fetch_array(mysqli_query($conn,"Select sum(ilosc) from zasoby where typ like 'kasa' and panstwo_id = $partner_handlowy group by typ"))[0];
        
        if ($iloscZasobu < $ilosc or $partner_handlowy == $_COOKIE['countryID'] or $iloscKasy < $cena) return;

        $s = "INSERT INTO zasoby (typ, ilosc, panstwo_id) VALUES ('$towar', -$ilosc, $_COOKIE[countryID])";
        mysqli_query($conn,$s);
        $q = "INSERT INTO zasoby (typ, ilosc, panstwo_id) VALUES ('kasa', -$cena, $partner_handlowy)";
        mysqli_query($conn,$q);
        $r = "INSERT INTO zasoby (typ, ilosc, panstwo_id) VALUES ('kasa', $cena, $_COOKIE[countryID])";
        mysqli_query($conn,$r);
        $t = "INSERT INTO zasoby (typ, ilosc, panstwo_id) VALUES ('$towar', $ilosc, $partner_handlowy)";
        mysqli_query($conn,$t);

        $sql = "INSERT INTO Handel (towar, ilosc, cena, partner_handlowy,panstwo_id) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sddsd", $towar, $ilosc, $cena, $partnerzy[$partner_handlowy-1],$_COOKIE["countryID"]);
        $stmt->execute();
    }
?>              