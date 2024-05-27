<?php
include_once "ChangeArmy.html"; 
?>

<form action="AddOperations.php" method="post">
    <label for="nazwa">Nazwa operacji:</label>
    <input type="text" id="nazwa" name="nazwa" required><br>
    
    <label for="cel">Cel operacji:</label>
    <textarea id="cel" name="cel" required></textarea><br>
    
    <label for="zasoby_wymagane">Zasoby wymagane:</label>
    <textarea id="zasoby_wymagane" name="zasoby_wymagane" required></textarea><br>
    
    <label for="harmonogram">Harmonogram:</label>
    <textarea id="harmonogram" name="harmonogram" required></textarea><br>
    
    <button type="submit" name="submit">Dodaj operację wojskową</button><br>
</form>
