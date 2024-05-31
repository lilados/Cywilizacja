<?php
    include_once "ChangePolitics.html";
?>

<form action="AddAdministation.php" method="post">
    <label for="ministerstwo">Ministerstwo:</label>
    <input type="text" id="ministerstwo" name="ministerstwo" required><br>
    
    <label for="budzet">Budżet:</label>
    <input type="number" id="budzet" name="budzet" step="0.01" required><br>
    
    <button type="submit" name="submit">Dodaj</button><br>
</form>

