<?php
include_once "ChangeInfra.html"; 
?>


<div>
<form action="AddProgress.php" method="post">
    <input type="hidden" name="id" value="" />
    
    <label for="projekt_id">ID projektu:</label>
    <input type="number" id="projekt_id" name="projekt_id" required /><br>
    
    <label for="data">Data:</label>
    <input type="date" id="data" name="data" required /><br>
    
    <label for="opis">Opis postępu:</label>
    <textarea id="opis" name="opis" required></textarea><br>
    
    <label for="stan_techniczny">Stan techniczny:</label>
    <textarea id="stan_techniczny" name="stan_techniczny" required></textarea><br>
    
    <button type="submit" name="action" value="create">Dodaj</button>
    <button type="submit" name="action" value="update">Edytuj</button>
    <button type="submit" name="action" value="delete">Usuń</button>
</form>
</div>