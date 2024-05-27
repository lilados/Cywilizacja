<?php
    include_once "ChangePolitics.html";
?>
<form action="AddEconomy.php" method="post">
    <label for="typ_wskaznika">Typ wskaźnika:</label>
    <select id="typ_wskaznika" name="typ_wskaznika" required>
        <option value="ekonomiczny">Ekonomiczny</option>
        <option value="społeczny">Społeczny</option>
        <option value="polityczny">Polityczny</option>
        <option value="wojskowy">Wojskowy</option>
    </select><br>
    
    <label for="wartosc">Wartość:</label>
    <input type="number" id="wartosc" name="wartosc" step="0.01" required><br>
    
    <button type="submit" name="submit">Dodaj wskaźnik</button><br>
</form>
