<?php
include_once "ChangeInfra.html"; 
?>


<div>
    <form action="AddResource.php" method="post">
        <input type="hidden" name="id" value="" />
        
        <label for="nazwa">Nazwa zasobu:</label>
        <input type="text" id="nazwa" name="nazwa" required /><br>
        
        <label for="ilosc">Ilość:</label>
        <input type="number" id="ilosc" name="ilosc" step="0.01" required /><br>
        
        <label for="jednostka">Jednostka:</label>
        <input type="text" id="jednostka" name="jednostka" required /><br>
        
        <label for="projekt_id">ID projektu:</label>
        <input type="number" id="projekt_id" name="projekt_id" required /><br>
        
        <button type="submit" name="action" value="create">Dodaj</button>
        <button type="submit" name="action" value="update">Edytuj</button>
        <button type="submit" name="action" value="delete">Usuń</button>
    </form>
</div>