var map;
var myLatLng;
$(document).ready(function() {
    geoLocationInit();
});

function geoLocationInit() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(success, fail);
    } else {
        alert("Browser not supported");
    }
}

function success(position) {

    var gps_latitudeval = position.coords.latitude;
    var gps_longitudeval = position.coords.longitude;
    console.log([gps_latitudeval, gps_longitudeval]);
    myLatLng = new google.maps.gps_longitudeval(gps_latitudeval, gps_longitudeval);
    createMap(myLatLng);
    // nearbySearch(myLatLng, "school");
    searchfarm(gps_latitudeval, gps_longitudeval);
}

function fail() {
    alert("it fails");
}
//Create Map
function createMap(myLatLng) {
    map = new google.maps.Map(document.getElementById('map'), {
        center: myLatLng,
        zoom: 12
    });
    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map
    });
}
//Create marker
function createMarker(latlng, icn, name) {
    var marker = new google.maps.Marker({
        position: latlng,
        map: map,
        icon: icn,
        title: name
    });
}

function searchfarm(gps_latitude, gps_longitude) {
    $.post('http://localhost/api/searchfarm', { gps_latitude: gps_latitude, gps_longitude: gps_longitude }, function(match) {
        // console.log(match);
        $('#girlsResult').html('');

        $.each(match, function(i, val) {
            var ggps_latitudeval = val.gps_latitude;
            var ggps_longitudeval = val.gps_longitude;
            var grice_farm_address = val.rice_farm_address;
            var ggps_longitudeval = new google.maps.LatLng(ggps_latitudeval, ggps_longitudeval);
            var gicn = 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png';
            createMarker(GLatLng, gicn, gname);
            var html = '<h5><li>' + gname + '</li></h5>';
            $('#girlsResult').append(html);
        });

        // $.each(match, function(i, val) {
        //   console.log(val.name);
        // });
    });
}

$('#searchGirls').submit(function(e) {
    e.preventDefault();
    var val = $('#locationSelect').val();
    $.post('http://localhost/api/getLocationCoords', { val: val }, function(match) {

        var myLatLng = new google.maps.LatLng(match[0], match[1]);
        createMap(myLatLng);
        searchGirls(match[0], match[1]);
    });
});