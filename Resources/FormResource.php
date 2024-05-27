<?php
    include_once "ChangeResources.html";
?>

<form action="AddResource.php" method="post">
    <label for="nazwa">Nazwa zasobu:</label>
    <input type="text" id="nazwa" name="nazwa" required> <br>
    
    <label for="typ">Typ zasobu:</label>
    <select id="typ" name="typ" required>
        <option value="naturalne">Naturalne</option>
        <option value="rolnicze">Rolnicze</option>
        <option value="przemysłowe">Przemysłowe</option>
        <option value="technologiczne">Technologiczne</option>
    </select><br>
    
    <label for="ilosc">Ilość:</label>
    <input type="number" id="ilosc" name="ilosc" step="1" required><br>
    
    <button type="submit" name="submit">Dodaj zasób</button>
</form>
