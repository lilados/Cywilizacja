<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Symulator Cywilizacji</title>

</head>

<body>
    <audio id="song" autoplay loop style="display: none;">
        <source src="ambient.mp3" type="audio/mpeg" >
    </audio>
    <script>
        window.addEventListener('click', () => {
            let audio = document.getElementById("song");
            audio.volume = 0.1;
            audio.play();
        });
    </script>
    <style>
        table,tr,th,td{
            border: 1px black solid;
        }
        table{
            width: 1500px;
        }
    </style>

<div id="wrapper">

  <div id="header"><h1><b>Symulator cywilizacji IN-DEV</b></h1></div>

  <div id="current-country">
            <h1 id="country-name" >Wybierz cywilizację</h1>
        </div>

  <div id="con">
        <?php include_once "connect.php" ?>
        <div id="listaAkcji">
            <ul id='list'>
                <li><button onclick="changeSite(0)">Zasoby</button></li>
                <li><button onclick="changeSite(1)">Polityka</button></li>
                <li><button onclick="changeSite(2)">Technologia</button></li>
                <li><button onclick="changeSite(3)">Infrastruktura</button></li>
                <li><button onclick="changeSite(4)">Armia</button></li>
            </ul>
            <br>
            <br><hr><br>
            <ul id="CountrySelect">
                <li><button onclick="changeCountry(1)">Underwoodland</button></li>
                <li><button onclick="changeCountry(2)">Wronis</button></li>
                <li><button onclick="changeCountry(3)">Masuria</button></li>
                <li><button onclick="changeCountry(4)">Janczland</button></li>
                <br><br><br>
                <li><button onclick="showMap()">Mapa świata</button></li>
            </ul>
        </div>


        
        <script src="script.js"></script>
    </div>

  <div id="content">
  <div class="image" style="background-image: url('images/mapaD.png');"></div>
</div>
        <iframe id="embedded-site"></iframe>
        <div id="footer" style='font-family: "MedievalSharp", cursive;'>
        </div>
    </div>
</body>
</html>