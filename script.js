
window.setInterval(setFooterContent,1000)

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

setFooterContent()