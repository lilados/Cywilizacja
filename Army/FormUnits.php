<?php
include_once "ChangeArmy.html"; 
?>

<form action="AddUnits.php" method="post">
    <label for="rodzaj">Rodzaj jednostki:</label>
    <input type="text" id="rodzaj" name="rodzaj" required><br>
    
    <label for="liczebnosc">Liczebność:</label>
    <input type="number" id="liczebnosc" name="liczebnosc" required><br>
    
    <label for="wyposazenie">Wyposażenie:</label>
    <textarea id="wyposazenie" name="wyposazenie" required></textarea><br>
    
    <label for="gotowosc">Stan gotowości:</label>
    <input type="text" id="gotowosc" name="gotowosc" required><br>
    
    <button type="submit" name="submit">Dodaj jednostkę wojskową</button><br>
</form>

