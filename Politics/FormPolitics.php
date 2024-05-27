<?php
    include_once "ChangePolitics.html";
?>
<form action="AddPolitics.php" method="post">
    <label for="nazwa">Nazwa polityki:</label>
    <input type="text" id="nazwa" name="nazwa" required><br>
    
    <label for="kategoria">Kategoria:</label>
    <select id="kategoria" name="kategoria" required>
        <option value="ekonomiczna">Ekonomiczna</option>
        <option value="społeczna">Społeczna</option>
        <option value="edukacyjna">Edukacyjna</option>
        <option value="zdrowotna">Zdrowotna</option>
        <option value="wojskowa">Wojskowa</option>
    </select><br>
    
    <label for="opis">Opis:</label>
    <textarea id="opis" name="opis" required></textarea><br>
    
    <button type="submit" name="submit">Dodaj politykę</button><br>
</form>
