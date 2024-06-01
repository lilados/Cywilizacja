<?php
include_once "ChangeArmy.html"; 
?>

<form action="AddUnits.php" method="post">
    <label for="rodzaj">Rodzaj jednostki:</label>
    <select name='units'>
        <option value='Rekrut'>Rekrut</option>
        <option value='Wojownik'>Wojownik</option>
        <option value='Strażnik'>Strażnik</option>
        <option value='Kawalerzysta'>Kawalerzysta</option>
        <option value='Łucznik'>Łucznik</option>
        <option value='Łucznik konny'>Łucznik konny</option>
        <option value='Kusznik'>Kusznik</option>
</select>
    
    <label for="liczebnosc">Liczebność:</label>
    <input type="number" id="liczebnosc" name="liczebnosc" required><br>
    
    <label for="gotowosc">Stan gotowości:</label>
    <select name='gotowosc'>
        <option value='ready'>Gotowy na front</option>
        <option value='defend'>Obrona państwa</option>
</select><br>
    <button type="submit" name="submit">Dodaj</button><br>
</form>
<?php 
                $current = $_COOKIE['countryID'];
                switch($current) {
                    case 1:
                        $countryName = 'Underwoodland';
                        break;
                    case 2:
                        $countryName = 'Wronis';
                        break;
                    case 3:
                        $countryName = 'Masuria';
                        break;
                    case 4:
                        $countryName = 'Janczland';
                        break;
                    default:
                        echo json_encode([]);
                        exit();
                }
                
                include '../connect.php';
                $sql = "SELECT rodzaj, SUM(liczebnosc) AS total_liczebnosc, stan_gotowosci
                FROM jednostki_wojskowe 
                WHERE panstwo_id = ? 
                GROUP BY rodzaj, stan_gotowosci";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("i", $current);
                $stmt->execute();
                $result = $stmt->get_result();
                
                if ($result->num_rows > 0) {
                    echo "<h3>Jednostki państwa:</h3>";
                    echo "<table border='1'>";
                    echo "<tr><th>Jednostka</th><th>Ilość</th><th>Gotowość</th></tr>";
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>{$row['rodzaj']}</td>";
                        echo "<td>{$row['total_liczebnosc']}</td>";
                        echo "<td>{$row['stan_gotowosci']}</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                } else {
                    echo "<p>Brak relacji dla tego państwa.</p>";
                }
                
                $stmt->close();
                $conn->close();

        ?>
