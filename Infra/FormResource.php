<?php
include_once "ChangeInfra.html"; 
?>


<form action="AddResource.php" method="post">
    <label for="projekt_id">ID projektu:</label>
    <input type="number" id="projekt_id" name="projekt_id" required /><br>
    
    <label for="zasob">Zasób:</label>
    <input type="text" id="zasob" name="zasob" required /><br>
    
    <label for="ilosc">Ilosc:</label>
    <input type="number" id="ilosc" name="ilosc" required /><br>
    
    <label for="jednostka">Jednostka:</label>
    <input type="text" id="jednostka" name="jednostka" required /><br>
    <button type="submit" name="submit">Dodaj zasoby</button><br>
</form>

