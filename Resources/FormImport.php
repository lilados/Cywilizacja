<?php
    include_once "ChangeResources.html";
?>

<div>
    <form action="AddImport.php" method="post">
        <input type="hidden" name="id" value="" />
        
        <label for="typ">Typ:</label>
        <select id="typ" name="typ">
            <option value="import">Import</option>
            <option value="eksport">Eksport</option>
        </select><br>
        
        <label for="kraj">Kraj:</label>
        <input type="text" id="kraj" name="kraj" required /> <br>
        
        <label for="wartosc">Wartość:</label>
        <input type="number" id="wartosc" name="wartosc" step="0.01" required /><br>
        
        <label for="data">Data:</label>
        <input type="date" id="data" name="data" required /><br>
        
        <button type="submit" name="action" value="create">Dodaj</button>
        <button type="submit" name="action" value="update">Edytuj</button>
        <button type="submit" name="action" value="delete">Usuń</button>
    </form>
</div>