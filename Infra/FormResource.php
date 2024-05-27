<?php
include_once "ChangeInfra.html"; 
?>


<form action="AddResource.php" method="post">
    <label for="nazwa">Nazwa projektu:</label>
    <input type="text" id="nazwa" name="nazwa" required><br>
    
    <label for="typ">Typ infrastruktury:</label>
    <input type="text" id="typ" name="typ" required><br>
    
    <label for="zasoby_potrzebne">Zasoby potrzebne:</label>
    <textarea id="zasoby_potrzebne" name="zasoby_potrzebne" required></textarea><br>
    
    <label for="harmonogram">Harmonogram:</label>
    <textarea id="harmonogram" name="harmonogram" required></textarea><br>
    
    <button type="submit" name="submit">Dodaj projekt infrastrukturalny</button><br>
</form>

