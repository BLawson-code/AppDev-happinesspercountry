let GetURL = "http://localhost/appdev/GetData.php";

function initMap() {

    var initialcoords = {lat: 64, lng: 26};
    map = new google.maps.Map(document.getElementById('map'), {center: initialcoords, zoom: 4});
    var url = GetURL;
    $.getJSON(url, getReply);

}

function getReply(reply) {

    for (i = 0; i < reply.data.length; i++) {
        createNewMapMarker(reply.data);
    }

}

function createNewMapMarker(data) {
    var markerLocation = new google.maps.LatLng(Lat, Lng)
    var popup = new google.maps.popup({ content: contentString });
    var marker = new google.maps.Marker({ position: markerLocation, map: map });
    var Rank = data[i].Overallrank;
    var Country = data[i].CountryorRegion;
    var Scores = data[i].score;
    var GDP = data[i].GDPpercapita;
    var socialSupport = data[i].SocSupport;
    var LifeExpectancy = data[i].LifeExect;
    var FreedomtoMakeChoice = data[i].FreedomofChoice;
    var Generosity = data[i].Generous;
    var Perception = data[i].perceptionofCorruption;
    var Lat = parseFloat(data[i].Lat);
    var Lng = parseFloat(data[i].Lng);

    var contentString = "<h2>Country info</h2> " +
        "<ul>" +
        "<li>Rank: " + Rank + "</li>" +
        "<li>Country: " + Country + "</li>" +
        "<li>Scores: " + Scores + "</li>" +
        "<li>GDP: " + GDP + "</li>" +
        "<li>Social Support: " + socialSupport + "</li>" +
        "<li>Life Expectancy: " + LifeExpectancy + "</li>" +
        "<li>Freedom of Choice: " + FreedomtoMakeChoice + "</li>" +
        "<li>Generosity: " + Generosity + "</li>" +
        "<li>Perception of Corruption: " + Perception + "</li>" +
        "</ul>";

    marker.addListener("click", function() {
        popup.open(map, marker);
    });
}