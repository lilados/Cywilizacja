<?php
    include_once "ChangeTechnology.html";
?>

<form action="AddProject.php" method="post">
    <label for="nazwa">Nazwa projektu:</label>
    <input type="text" id="nazwa" name="nazwa" required><br>
    
    <label for="cele">Cele badań:</label>
    <textarea id="cele" name="cele" required></textarea><br>
    
    <label for="zasoby_potrzebne">Zasoby potrzebne:</label>
    <textarea id="zasoby_potrzebne" name="zasoby_potrzebne" required></textarea><br>
    
    <label for="harmonogram">Harmonogram:</label>
    <textarea id="harmonogram" name="harmonogram" required></textarea><br>
    
    <button type="submit" name="submit">Dodaj</button><br>
</form>

