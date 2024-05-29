<?php
include_once "ChangeInfra.html"; 
?>


<div>
    <form action="AddBuild.php" method="post">
        <input type="hidden" name="id" value="" />
        
        <label for="nazwa">Nazwa projektu:</label>
        <input type="text" id="nazwa" name="nazwa" required /><br>
        
        <label for="typ">Typ:</label>
        <select id="typ" name="typ">
            <option value="droga">Droga</option>
            <option value="most">Most</option>
            <option value="szkola">Szkoła</option>
            <option value="szpital">Szpital</option>
            <option value="inny">Inny</option>
        </select><br>
        
        <button type="submit">Dodaj</button>
    </form>
</div>