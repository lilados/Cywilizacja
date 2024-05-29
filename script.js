
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
}