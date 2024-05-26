<?php
    include_once "ChangeResources.html";
?>

<div>
    <form action="AddTrade.php" method="post">
        <input type="hidden" name="id" value="" />
        
        <label for="towar">Towar:</label>
        <input type="text" id="towar" name="towar" required /><br>
        
        <label for="ilosc">Ilość:</label>
        <input type="number" id="ilosc" name="ilosc" step="0.01" required /><br>
        
        <label for="cena">Cena:</label>
        <input type="number" id="cena" name="cena" step="0.01" required /><br>
        
        <label for="partner_handlowy">Partner handlowy:</label>
        <input type="text" id="partner_handlowy" name="partner_handlowy" required /><br>
        
        <label for="data">Data:</label>
        <input type="date" id="data" name="data" required /><br>
        
        <button type="submit" name="action" value="create">Dodaj</button>
        <button type="submit" name="action" value="update">Edytuj</button>
        <button type="submit" name="action" value="delete">Usuń</button>
    </form>
</div>