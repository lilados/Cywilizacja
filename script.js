
window.setInterval(setFooterContent,1000)
window.setInterval(raport,5000)

sites = [
    "Resources/FormResource.php",
    "Politics/FormPolitics.php",
    "Technology/FormProjects.php",
    "Infra/FormBuild.php",
    "Army/FormUnits.php",
];

function changeSite(siteID) {
    var site = document.getElementById("embedded-site");
    site.setAttribute("src",sites[siteID]);
}

function changeCountry(countryID) {
    document.cookie = `countryID=${countryID}`;
    var countryName, countryMap;

    switch(countryID) {
        case 1:
            countryName = 'Underwoodland';
            countryMap = 'images/woodlands.png';
            break;
        case 2:
            countryName = 'Wronis';
            countryMap = 'images/wronis.png';
            break;
        case 3:
            countryName = 'Masuria';
            countryMap = 'images/masuria.png';
            break;
        case 4:
            countryName = 'Janczland';
            countryMap = 'images/janczland.png';
            break;
        default:
            countryName = 'Select a country';
            countryMap = '';
    }

    setFooterContent()
    document.getElementById('country-name').innerText = countryName;
    var imagePath =`url('${countryMap}')`; 
    var imageDiv = document.querySelector('.image');
    imageDiv.style.backgroundImage = imagePath;
}; 

function showMap() {
    var imageDiv = document.querySelector('.image');
    imageDiv.style.backgroundImage = `url('images/mapaD.png')`;
}

function setFooterContent(){
    var stopka = document.getElementById('footer')
    fetch("Resources/AddResource.php").then(response => response.json()).then(data =>{
        var text = "<table> <tr>"
        for (let i = 0; i < data.labels.length; i++) {
            text += `<th> ${data.labels[i]} </th>`
        }
        text += "</tr> <tr>"
        for (let i = 0; i < data.values.length; i++) {
            text += `<td> ${data.values[i]} </td>`
        }
        text += "</tr> </table>"
        stopka.innerHTML = text
    })

}

function raport() {
    var missingResourcesPool = []
    var raport = document.getElementById('raport')
    fetch("Resources/AddResource.php").then(response => response.json()).then(data =>{
        for (let i = 0; i < data.labels.length; i++) {
            if (data.values[i] < 1000) missingResourcesPool.push(data.labels[i])
        }

        var selected = missingResourcesPool[(Math.floor(Math.random() * missingResourcesPool.length))]
        var text = ""
        switch (selected) {
            case "zywnosc":
                text = "Panie, prowiant się kończy"
                break;
            case "kamien":
                text = "PANIE POTRZEBUJEMY KAMIENI!!"
                break;
            case "drewno":
                text = "Nie mamy czym budować panie."
                break;
            case "wegiel":
                text = "Węgiel się kończy, nie będzie czym dymić w europie!"
                break;
            case "zloto":
                text = "Złoto się skończyło panie."
                break;
            case "kasa":
                text = "Tracimy fundusze krajowe, nie ma piniodzy!"
                break;
            case "zelazo":
                text = "Tracimy metale, nie możemy kuć i pluć!"
                break;
    
            default:
                break;
        }
        var obrazki = ["wardega","gola","boziol","chop","chop2"]

        raport.innerHTML = "<img src='images/"+ obrazki[(Math.floor(Math.random() * obrazki.length))]+".png' style='height:80px;float:left;'></img> " +  text
    }) 
}

setFooterContent()
raport()
changeCountry(1)
