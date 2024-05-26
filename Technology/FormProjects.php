<?php
    include_once "ChangeTechnology.html";
?>

<div>
    <form action="AddProject.php" method="post">
        <input type="hidden" name="id" value="" />
        
        <label for="nazwa">Nazwa projektu:</label>
        <input type="text" id="nazwa" name="nazwa" required /><br>
        
        <label for="cel">Cel badań:</label>
        <textarea id="cel" name="cel" required></textarea><br>
        
        <label for="zasoby">Zasoby potrzebne:</label>
        <textarea id="zasoby" name="zasoby" required></textarea><br>
        
        <label for="harmonogram">Harmonogram:</label>
        <textarea id="harmonogram" name="harmonogram" required></textarea><br>
        
        <button type="submit" name="action" value="create">Dodaj</button>
        <button type="submit" name="action" value="update">Edytuj</button>
        <button type="submit" name="action" value="delete">Usuń</button>
    </form>
</div>