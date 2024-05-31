<?php
include_once "ChangeArmy.html"; 
?>

<form action="AddUnits.php" method="post">
    <label for="rodzaj">Rodzaj jednostki:</label>
    <select name='units'>
        <option value='Rekrut'>Rekrut</option>
        <option value='Wojownik'>Wojownik</option>
        <option value='Strażnik'>Strażnik</option>
        <option value='Kawalerzysta'>Kawalerzysta</option>
        <option value='Łucznik'>Łucznik</option>
        <option value='Łucznik konny'>Łucznik konny</option>
        <option value='Kusznik'>Kusznik</option>
</select>
    
    <label for="liczebnosc">Liczebność:</label>
    <input type="number" id="liczebnosc" name="liczebnosc" required><br>
    
    <label for="gotowosc">Stan gotowości:</label>
    <select name='gotowosc'>
        <option value='ready'>Gotowy na front</option>
        <option value='defend'>Obrona państwa</option>
</select><br>
    <button type="submit" name="submit">Dodaj</button><br>
</form>

