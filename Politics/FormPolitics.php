<?php
    include_once "ChangePolitics.html";
?>
<div>
    <form action="AddPolitics.php" method="post">
    <input type="hidden" name="id" value="" />
    <label for="nazwa">Nazwa:</label>
    <input type="text" id="nazwa" name="nazwa" required /><br>
    
    <label for="typ">Typ:</label>
    <select id="typ" name="typ">
        <option value="ekonomiczna">Ekonomiczna</option>
        <option value="spoleczna">Społeczna</option>
        <option value="edukacyjna">Edukacyjna</option>
        <option value="zdrowotna">Zdrowotna</option>
        <option value="wojskowa">Wojskowa</option>
    </select> <br>
    
    <label for="opis">Opis:</label>
    <textarea id="opis" name="opis"></textarea><br>
    
    <button type="submit" name="action" value="create">Utwórz</button>
    <button type="submit" name="action" value="update">Edytuj</button>
    <button type="submit" name="action" value="delete">Usuń</button>
</form>

</form>
</div>