<!-- ZRÓB SOBIE BAZIE O NAZWIE cywilizacja w phpmyadmin -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Symulator Cywilizacji</title>
</head>
<body>
    <div id="con">
        <?php 
            include_once "connect.php"
        ?>
        <div id="listaAkcji">
            <ol>
                <li><button onclick="changeSite(0)">Resources</button></li>
                <li><button onclick="changeSite(1)">Handel</button></li>
                <li><button onclick="changeSite(2)">Politics</button></li>
                <li><button onclick="changeSite(3)">Studies</button></li>
                <li><button onclick="changeSite(4)">Technology</button></li>
                <li><button onclick="changeSite(5)">Buildings</button></li>
                <li><button onclick="changeSite(6)">Army</button></li>
            </ol>
        </div>  

        <iframe id="embedded-site"></iframe>

    </div>
    <script src="script.js"></script>
</body>
</html>