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
                <li><button onclick="changeSite(1)">Politics</button></li>
                <li><button onclick="changeSite(2)">Technology</button></li>
                <li><button onclick="changeSite(3)">Infrastructure</button></li>
                <li><button onclick="changeSite(4)">Army</button></li>
            </ol>
            <ol id="CountrySelect">
                <li><button onclick="changeCountry(1)">Underwoodment</button></li>
                <li><button onclick="changeCountry(2)">Wronis</button></li>
                <li><button onclick="changeCountry(3)">Masuria</button></li>
                <li><button onclick="changeCountry(4)">Jagorria</button></li>
            </ol>
        </div>
        
       
        <iframe id="embedded-site"></iframe>
        <script src="script.js"></script>
    </div>
</body>
</html>