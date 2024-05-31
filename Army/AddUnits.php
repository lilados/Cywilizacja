<?php
    include_once "../connect.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $rodzaj = $_POST['units'];
        $liczebnosc = $_POST['liczebnosc'];
        $gotowosc = $_POST['gotowosc'];
        
        $iloscJedzenia = mysqli_fetch_array(mysqli_query($conn,"Select sum(ilosc) from zasoby where typ like 'zywnosc' and panstwo_id = $_COOKIE[countryID] group by typ"))[0];

        if ($iloscJedzenia < $liczebnosc*10) return;
        $sql = "INSERT INTO jednostki_wojskowe (rodzaj, liczebnosc, stan_gotowosci,panstwo_id) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sisd", $rodzaj, $liczebnosc, $gotowosc,$_COOKIE["countryID"]);
        $stmt->execute();

        $s = "INSERT INTO zasoby ( typ, ilosc, panstwo_id) VALUES ('zywnosc', -$liczebnosc * 10, $_COOKIE[countryID])";
        $st = mysqli_query($conn,$s);
    }    
?>