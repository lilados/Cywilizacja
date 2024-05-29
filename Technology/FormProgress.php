<?php
    include_once "ChangeTechnology.html";
?>

<div>
    <form action="AddProgress.php" method="post">
        <input type="hidden" name="id" value="" />
        
        <label for="projekt_id">ID projektu:</label>
        <input type="number" id="projekt_id" name="projekt_id" required /><br>
        
        <label for="data">Data:</label>
        <input type="date" id="data" name="data" required /><br>
        
        <label for="nowe_technologie">Nowe technologie:</label>
        <textarea id="nowe_technologie" name="nowe_technologie"></textarea><br>
        
        <button type="submit">Dodaj</button>
    </form>
</div>