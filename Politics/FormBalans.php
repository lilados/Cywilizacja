<?php
    include_once "ChangePolitics.html";
?>
<div>
    <form action="AddBalans.php" method="post">
        <input type="hidden" name="id" value="" />
        
        <label for="rok">Data</label>
        <input type="date" id="rok" name="rok" required />
        
        <label for="import_wartosc">Nowy balans:</label>
        <input type="number" id="import_wartosc" name="bilans" step="0.01" required />
        
        <button type="submit" name="action" value="create">Dodaj</button>
        <button type="submit" name="action" value="update">Edytuj</button>
        <button type="submit" name="action" value="delete">Usuń</button>
    </form>
</div>