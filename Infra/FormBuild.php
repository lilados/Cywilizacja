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
        
        <label for="lokalizacja">Lokalizacja:</label>
        <input type="text" id="lokalizacja" name="lokalizacja" required /><br>
        
        <label for="data_rozpoczecia">Data rozpoczęcia:</label>
        <input type="date" id="data_rozpoczecia" name="data_rozpoczecia" required /><br>
        
        <label for="data_zakonczenia">Data zakończenia:</label>
        <input type="date" id="data_zakonczenia" name="data_zakonczenia" /><br>
        
        <label for="status">Status:</label>
        <select id="status" name="status">
            <option value="planowane">Planowane</option>
            <option value="w_trakcie">W trakcie</option>
            <option value="zakończone">Zakończone</option>
        </select><br>
        
        <button type="submit" name="action" value="create">Dodaj</button>
        <button type="submit" name="action" value="update">Edytuj</button>
        <button type="submit" name="action" value="delete">Usuń</button>
    </form>
</div>