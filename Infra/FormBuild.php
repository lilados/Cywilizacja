<div>
    Wybuduj budynki dla swojej Cywilizacji
    <form action="AddBuild.php" method="get">
        Rodzaj jednostki <select name="building">
            <option value="turfhouse">Turf house</option>
            <option value="Longhouse">Longhouse</option>
            <option value="House">House</option>
            <option value="Church">Church</option>
            <option value="Ritual house">Ritual house</option>
            <option value="Ring fortress">Ring fortress</option>
            <option value="Boating house">Boating house</option>
        </select>
        
        <input type="number" value="0" name="amount">Ilość dodanych budowli</input>
        <input type="submit" value="Dodaj">
    </form>
</div>