<?php
include_once "ChangeArmy.html"; 
?>

<form action="AddOperations.php" method="post">
    <label for="nazwa">Nazwa operacji:</label>
    <input type="text" id="nazwa" name="nazwa" required><br>
    
    <label for="cel">Cel operacji:</label>
    <textarea id="cel" name="cel" required></textarea><br>
    
    <label for="data">Data operacji:</label>
    <input type="date" id="data" name="data" required><br>

    <label for="opis">Opis operacji:</label>
    <input type="text" id="opis" name="opis" required><br>
    
    
    <button type="submit" name="submit">Dodaj operację wojskową</button><br>
</form>
