<?php
include_once "ChangeArmy.html"; 
?>

<form action="AddExpenses.php" method="post">
    <label for="nazwa">Nazwa wydatku:</label>
    <input type="text" id="nazwa" name="nazwa" required><br>
    
    <label for="kwota">Kwota:</label>
    <input type="number" id="kwota" name="kwota" step="0.01" required><br>
    
    <label for="cel">Cel wydatku:</label>
    <textarea id="cel" name="cel" required></textarea><br>
    
    <button type="submit" name="submit">Dodaj wydatek wojskowy</button><br>
</form>
