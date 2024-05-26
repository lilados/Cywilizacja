<?php
include_once "ChangeArmy.html"; 
?>

<div>
<form action="AddExpenses.php" method="post">
    <input type="hidden" name="id" value="" />
    
    <label for="data">Data:</label>
    <input type="date" id="data" name="data" required /><br>
    
    <label for="kategoria">Kategoria:</label>
    <select id="kategoria" name="kategoria">
        <option value="zakup_sprzetu">Zakup sprzętu</option>
        <option value="szkolenie">Szkolenie</option>
        <option value="utrzymanie">Utrzymanie</option>
    </select><br>
    
    <label for="kwota">Kwota:</label>
    <input type="number" id="kwota" name="kwota" step="0.01" required /><br>
    
    <label for="opis">Opis:</label>
    <textarea id="opis" name="opis" required></textarea><br>
    
    <button type="submit" name="action" value="create">Dodaj</button>
    <button type="submit" name="action" value="update">Edytuj</button>
    <button type="submit" name="action" value="delete">Usuń</button>
</form>

</div>