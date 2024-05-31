<?php
    include_once "ChangeResources.html";
?>

<form action="AddTrade.php" method="post">
    <label for="towar">Towar:</label>
    <select name="towar">
        <option value="zywnosc">Żywność</option>
        <option value="kamien">Kamień</option>
        <option value="drewno">Drewno</option>
        <option value="zelazo">Żelazo</option>
        <option value="wegiel">Węgiel</option>
        <option value="zloto">Złoto</option>
        <option value="kasa">Kasa</option>
    </select><br>
    
    <label for="ilosc">Ilość:</label>
    <input type="number" id="ilosc" name="ilosc" step="0.01" required><br>
    
    <label for="cena">Cena:</label>
    <input type="number" id="cena" name="cena" step="0.01" required><br>
    
    <label for="partner_handlowy">Partner handlowy:</label>
    <select name="partner_handlowy">
        <option value="1">Underwoodland</option>
        <option value="2">Wronis</option>
        <option value="3">Masuria</option>
        <option value="4">Janczland</option>

    </select><br>
    
    <button type="submit" name="submit">Dodaj</button><br>
</form>


