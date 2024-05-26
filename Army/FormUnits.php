<?php
include_once "ChangeArmy.html"; 
?>

<div>
    <form action="AddUnits.php" method="post">
        <input type="hidden" name="id" value="" />
        
        <label for="nazwa">Nazwa jednostki:</label>
        <input type="text" id="nazwa" name="nazwa" required /><br>
        
        <label for="rodzaj">Rodzaj jednostki:</label>
        <select id="rodzaj" name="rodzaj">
            <option value="piechota">Piechota</option>
            <option value="kawaleria">Kawaleria</option>
            <option value="artyleria">Artyleria</option>
            <option value="lotnictwo">Lotnictwo</option>
            <option value="marynarka">Marynarka</option>
            <option value="inny">Inny</option>
        </select><br>
        
        <label for="liczebnosc">Liczebność:</label>
        <input type="number" id="liczebnosc" name="liczebnosc" required /><br>
        
        <label for="wyposazenie">Wyposażenie:</label>
        <textarea id="wyposazenie" name="wyposazenie" required></textarea><br>
        
        <label for="stan_gotowosci">Stan gotowości:</label>
        <select id="stan_gotowosci" name="stan_gotowosci">
            <option value="gotowy">Gotowy</option>
            <option value="w_trakcie_szkolenia">W trakcie szkolenia</option>
            <option value="w_naprawie">W naprawie</option>
            <option value="niegotowy">Niegotowy</option>
        </select><br>
        
        <button type="submit" name="action" value="create">Dodaj</button>
        <button type="submit" name="action" value="update">Edytuj</button>
        <button type="submit" name="action" value="delete">Usuń</button>
    </form>
</div>