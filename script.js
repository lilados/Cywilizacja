
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

// function changeCountry(countryID) {
//     document.cookie = `countryID=${countryID}`;
// }
function changeCountry(countryID) {
    console.log('Changing country:', countryID); // Check if function is called
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
            countryMap = ''; // Empty the countryMap in case of default
    }

    console.log('Country Map:', countryMap); 
    document.getElementById('country-name').innerText = countryName;
    var imagePath =`url('${countryMap}')`; 
    var imageDiv = document.querySelector('.image');
    imageDiv.style.backgroundImage = imagePath;
}; 

    function showMap() {
        var imageDiv = document.querySelector('.image');
        imageDiv.style.backgroundImage = `url('images/mapaD.png')`; // Fixed the closing quote
    }