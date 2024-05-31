<?php
    include_once "ChangeResources.html";
?>

<form action="AddResource.php" method="post">

    <label for="typ">Dodaj zasoby:</label>
    <select name="typ">
        <option value="zywnosc">Żywność</option>
        <option value="kamien">Kamień</option>
        <option value="drewno">Drewno</option>
        <option value="zelazo">Żelazo</option>
        <option value="wegiel">Węgiel</option>
        <option value="zloto">Złoto</option>
        <option value="kasa">Kasa</option>
    </select><br>
    
    <label for="ilosc">Ilość:</label>
    <input type="number" id="ilosc" name="ilosc" step="1" required><br>
    
    <button type="submit" name="submit">Dodaj</button>
</form>
