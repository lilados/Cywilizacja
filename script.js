sites = [
    "Resources/FormResource.php",
    "Politics/FormPolitics.php",
];
changeSite(0);

function changeSite(siteID) {
    var site = document.getElementById("embedded-site");
    site.setAttribute("src",sites[siteID]);
}