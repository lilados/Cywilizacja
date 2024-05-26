<?php
    include_once "ChangePolitics.html";
?>
<div>
<form action="AddEconomy.php" method="post">
    <input type="hidden" name="id" value="" />
    <label for="nazwa">Nazwa:</label>
    <input type="text" id="nazwa" name="nazwa" required /><br>
    
    <label for="typ">Typ:</label>
    <select id="typ" name="typ">
        <option value="ministerstwo">Ministerstwo</option>
        <option value="agencja">Agencja</option>
    </select><br>
    
    <label for="budzet">Budżet:</label> 
    <input type="number" id="budzet" name="budzet" step="0.01" required /><br>
    
    <button type="submit" name="action" value="create">Utwórz</button>
    <button type="submit" name="action" value="update">Edytuj</button>
    <button type="submit" name="action" value="delete">Usuń</button>
</form>

</div>