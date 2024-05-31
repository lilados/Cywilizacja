<?php
include_once "ChangeInfra.html"; 
?>


<form action="AddResource.php" method="post">
    <label for="projekt_id">ID projektu:</label>
    <input type="number" id="projekt_id" name="projekt_id" required /><br>
    <label>Zasób:</label>
    <select name="zasob">
        <option value="zywnosc">Żywność</option>
        <option value="kamien">Kamień</option>
        <option value="drewno">Drewno</option>
        <option value="zelazo">Żelazo</option>
        <option value="wegiel">Węgiel</option>
        <option value="zloto">Złoto</option>
        <option value="Kasa">Kasa</option>
    </select><br>
    
    <label for="ilosc">Ilosc:</label>
    <input type="number" id="ilosc" name="ilosc" required /><br>
    
    <label for="jednostka">Jednostka:</label>
    <input type="text" id="jednostka" name="jednostka" required /><br>
    <button type="submit" name="submit">Dodaj</button><br>
</form>

