<?php
include_once "linkiDoAlternatyw.html"; 
?>

<div>
    Dodaj jednostki wojskowe dla swojej Cywilizacji
    <form action="AddUnit.php" method="get">
        Rodzaj jednostki <select name="unit">
            <option value="Thrall">Thrall</option>
            <option value="Archer">Archer</option>
            <option value="Shieldmaiden">Shieldmaiden</option>
            <option value="Huscarl">Huscarl</option>
            <option value="Jomsviking">Jomsviking</option>
            <option value="Berserker">Berserker</option>
        </select>
        
        <input type="number" value="0" name="amount">Ilość dodanych jednostek</input>
        <input type="submit" value="Dodaj">
    </form>
</div>