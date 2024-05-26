<?php
    include_once "ChangeTechnology.html";
?>

<div>
    <form action="AddDocument.php" method="post">
        <input type="hidden" name="id" value="" />
        
        <label for="projekt_id">ID projektu:</label>
        <input type="number" id="projekt_id" name="projekt_id" required /><br>
        
        <label for="data">Data:</label>
        <input type="date" id="data" name="data" required /><br>
        
        <label for="wyniki">Wyniki badań:</label>
        <textarea id="wyniki" name="wyniki" required></textarea><br>
        
        <label for="innowacje">Innowacje technologiczne:</label>
        <textarea id="innowacje" name="innowacje" required></textarea><br>
        
        <label for="wplyw_na_rozwoj">Wpływ na rozwój państwa:</label>
        <textarea id="wplyw_na_rozwoj" name="wplyw_na_rozwoj" required></textarea><br>
        
        <button type="submit" name="action" value="create">Dodaj</button>
        <button type="submit" name="action" value="update">Edytuj</button>
        <button type="submit" name="action" value="delete">Usuń</button>
    </form>
</div>