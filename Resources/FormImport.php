<?php
    include_once "ChangeResources.html";
?>

<form action="AddImport.php" method="post">
   
    <label for="data">Data:</label>
    <input type="date" id="data" name="data" required><br>
    
    <label for="wartosc">Wartosc:</label>
    <input type="number" id="wartosc" name="wartosc" step="0.01" required><br>
    
    <button type="submit" name="submit">Dodaj Bilans</button><br>
</form>
