<?php
include_once "ChangeInfra.html"; 
?>


<div>
    <form action="AddBuild.php" method="post">
        <input type="hidden" name="id" value="" />
        
        <label for="nazwa">Nazwa projektu:</label>
        <input type="text" id="nazwa" name="nazwa" required /><br>
        
        <label for="typ">Typ:</label>
        <select id="typ" name="typ">
            <option value="droga">Droga</option>
            <option value="dom">Dom</option>
            <option value="karczma">Karczma</option>
            <option value="lecznica">Lecznica</option>
            <option value="straznica">Strażnica</option>
            <option value="koszary">Koszary</option>
            <option value="warownia">Warownia</option>

        </select><br>
        
        <button type="submit">Dodaj</button>
    </form>

        <?php 
                $current = $_COOKIE['countryID'];
                include '../connect.php';
            $query = mysqli_query($conn, "SELECT  * from projekty_infrastrukturalne where panstwo_id LIKE $current");
            echo '<table><tr><th>Id projektu</th><th>Nazwa projektu</th><th>Rodzaj</th>';
            while($row=mysqli_fetch_array($query)){
                echo "<tr> <td>$row[0] </td><td>$row[1] </td><td>$row[2] </td></tr> ";
            };
            echo '</table>';

        ?>

</div>