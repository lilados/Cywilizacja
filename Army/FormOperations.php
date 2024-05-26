<?php
include_once "ChangeArmy.html"; 
?>

<div>
    <form action="Add.php" method="post">
        <input type="hidden" name="id" value="" />
        
        <label for="nazwa">Nazwa operacji:</label>
        <input type="text" id="nazwa" name="nazwa" required /><br>
        
        <label for="data_rozpoczecia">Data rozpoczęcia:</label>
        <input type="date" id="data_rozpoczecia" name="data_rozpoczecia" required /><br>
        
        <label for="data_zakonczenia">Data zakończenia:</label>
        <input type="date" id="data_zakonczenia" name="data_zakonczenia" /><br>
        
        <label for="cel">Cel operacji:</label>
        <textarea id="cel" name="cel" required></textarea><br>
        
        <label for="status">Status:</label>
        <select id="status" name="status">
            <option value="planowana">Planowana</option>
            <option value="w_trakcie">W trakcie</option>
            <option value="zakończona">Zakończona</option>
        </select><br>
        
        <button type="submit" name="action" value="create">Dodaj</button>
        <button type="submit" name="action" value="update">Edytuj</button>
        <button type="submit" name="action" value="delete">Usuń</button>
    </form>
</div>