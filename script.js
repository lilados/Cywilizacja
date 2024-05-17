

sites = [
    "resourceForm.php",
    "armyForm.php",
    "resourceForm.php",
    "resourceForm.php",
    "resourceForm.php",
    "resourceForm.php",
    "resourceForm.php"
];
changeSite(0);

function changeSite(siteID) {
    var site = document.getElementById("embedded-site")
    site.setAttribute("src",sites[siteID])
}