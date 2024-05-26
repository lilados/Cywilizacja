<?php
    include_once "ChangeResources.html";
?>

<div>
    <form action="AddResource.php" method="post">
        <input type="hidden" name="id" value="" />
        
        <label for="nazwa">Nazwa:</label>
        <input type="text" id="nazwa" name="nazwa" required /><br>
        
        <label for="typ">Typ:</label>
        <select id="typ" name="typ">
            <option value="surowce_naturalne">Surowce naturalne</option>
            <option value="produkty_rolnicze">Produkty rolnicze</option>
            <option value="produkty_przemyslowe">Produkty przemysłowe</option>
            <option value="produkty_technologiczne">Produkty technologiczne</option>
        </select><br>
        
        <label for="ilosc">Ilość:</label>
        <input type="number" id="ilosc" name="ilosc" step="0.01" required /><br>
        
        <label for="jednostka">Jednostka:</label>
        <input type="text" id="jednostka" name="jednostka" required /><br>
        
        <button type="submit" name="action" value="create">Dodaj</button>
        <button type="submit" name="action" value="update">Edytuj</button>
        <button type="submit" name="action" value="delete">Usuń</button>
    </form>
</div>