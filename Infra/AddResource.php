<?php
    include_once "../connect.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $projekt_id = $_POST['projekt_id'];
        $zasob = $_POST['zasob'];
        $ilosc = $_POST['ilosc'];
        $jednostka = $_POST['jednostka'];
        
        $iloscZasobu= mysqli_fetch_array(mysqli_query($conn,"Select sum(ilosc) from zasoby where typ like '$zasob' and panstwo_id = $_COOKIE[countryID] group by typ"))[0];

        if ($iloscZasobu < $ilosc) return;

        $sql = "INSERT INTO zasoby_infrastrukturalne (projekt_id, zasob, ilosc, jednostka) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("dsds", $projekt_id, $zasob, $ilosc, $jednostka);
        $stmt->execute();

        $s = "INSERT INTO zasoby (typ, ilosc, panstwo_id) VALUES ('$zasob', -$ilosc, $_COOKIE[countryID])";
        $st = mysqli_query($conn,$s);
    }
?>