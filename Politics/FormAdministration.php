<?php
    include_once "ChangePolitics.html";
?>

<div>
    <form action="AddAdministration.php" method="post">
        <input type="hidden" name="id" value="" />
        <label for="typ">Typ wskaźnika:</label> 
        <select id="typ" name="typ">
            <option value="ekonomiczny">Ekonomiczny</option>
            <option value="spoleczny">Społeczny</option>
            <option value="polityczny">Polityczny</option>
            <option value="wojskowy">Wojskowy</option>
        </select><br>
        
        <label for="wartosc">Wartość:</label>
        <input type="number" id="wartosc" name="wartosc" step="0.01" required /><br>
        
        <label for="data">Data:</label>
        <input type="date" id="data" name="data" required /><br>
        
        <button type="submit" name="action" value="create">Dodaj</button>
        <button type="submit" name="action" value="update">Edytuj</button>
        <button type="submit" name="action" value="delete">Usuń</button>
    </form>
</div>