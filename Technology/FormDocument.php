<?php
    include_once "ChangeTechnology.html";
?>

<form action="AddDocument.php" method="post">
    <label for="projekt_id">ID projektu:</label>
    <input type="number" id="projekt_id" name="projekt_id" required><br>
    
    <label for="data">Data dokumentacji:</label>
    <input type='date' id="data" name="data" required></input><br>

    <label for="wyniki">Wyniki badań:</label>
    <textarea id="wyniki" name="wyniki" required></textarea><br>
    
    <label for="innowacje">Innowacje technologiczne:</label>
    <textarea id="innowacje" name="innowacje" required></textarea><br>
    
    <button type="submit" name="submit">Dodaj</button><br>
</form>
