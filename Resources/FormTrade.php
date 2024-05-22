<?php
    include_once "ChangeResources.html";
?>

<div>
    Dodaj Relacje handlu
    <form action="AddResource.php" method="get">
        Rodzaj Surowca <select name="resource">
            <option value="Wood">Drewno</option>
            <option value="Stone">Głazy</option>
            <option value="Food">Jedzenie</option>
        </select>
        <input type="number" value="0" name="amount">Ilość zasobów</input>
        <input type="number" value="0" name="price">Cena za jednostke</input>
        <input type="text"  name="partner">Partner Handlu</input>
        Rodzaj Handlu <select name="type">
            <option value="import">Import</option>
            <option value="export">Export</option>
        </select>
        <input type="submit" value="Dodaj">
    </form>
</div>