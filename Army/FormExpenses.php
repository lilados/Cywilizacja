<?php
include_once "ChangeArmy.html"; 
?>

<form action="AddExpenses.php" method="post">
    <label for='Wydatek'>Wydatek</label>
    <select name='expense'>Wydatek
        <option value='Sword'>Trening</option>
        <option value='Armor'>Wyposażenie</option>
        <option value='Shield'>Żołd</option>
        <option value='Bow'>Racje żywnościowe</option>


        <label for="data">Data operacji:</label>
    <input type="date" id="data" name="data" required><br>
</select>
    <label for="kwota">Kwota:</label>
    <input type="number" id="kwota" name="kwota" step="0.01" required><br>
    

    <button type="submit" name="submit">Dodaj</button><br>
</form>
