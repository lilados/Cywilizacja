<?php
    include_once "ChangePolitics.html";
?>
<form action="AddPolitics.php" method="post">
    <label for="nazwa">Nazwa rozporządzenia/ustawy:</label>
    <input type="text" id="nazwa" name="nazwa" required><br>
    
    <label for="kategoria">Kategoria:</label>
    <select id="kategoria" name="kategoria" required>
        <option value="ekonomiczna">Ekonomiczna</option>
        <option value="społeczna">Społeczna</option>
        <option value="edukacyjna">Edukacyjna</option>
        <option value="zdrowotna">Zdrowotna</option>
        <option value="wojskowa">Wojskowa</option>
    </select><br>
    
    <label for="opis">Opis:</label>
    <textarea id="opis" name="opis" required></textarea><br>
    
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
                
                $sql = "SELECT panstwo1, panstwo2, relation FROM relations WHERE panstwo1 = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("s", $countryName); // Wiązanie parametru
                $stmt->execute();
                $result = $stmt->get_result();
                
                if ($result->num_rows > 0) {
                    echo "<h3>Relacje z innymi państwami:</h3>";
                    echo "<table border='1'>";
                    echo "<tr><th>Państwo 1</th><th>Państwo 2</th><th>Relacja</th></tr>";
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>{$row['panstwo1']}</td>";
                        echo "<td>{$row['panstwo2']}</td>";
                        echo "<td>{$row['relation']}</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                } else {
                    echo "<p>Brak relacji dla tego państwa.</p>";
                }
                
                $stmt->close();

        ?>