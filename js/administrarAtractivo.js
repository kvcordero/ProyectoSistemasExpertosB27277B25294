function fileChange() {
    var file = $("#fsPerfil")[0].files[0];
    var reader = new FileReader();
    reader.onload = function (e) {
        $('#imgPerfil').attr('src', e.target.result);
    };
    reader.readAsDataURL(file);
}

var latitud = 0;
var longitud = 0;
var map;
var marker = new google.maps.Marker();
var latlng;
var directionsDisplay;
var directionsService = new google.maps.DirectionsService();

function initialize() {
directionsDisplay = new google.maps.DirectionsRenderer();
    latlng = new google.maps.LatLng(9.63,-82.48);
    var myOptions = {
        zoom: 10,
        center: latlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    map = new google.maps.Map(document.getElementById("map-canvas"), myOptions);
    google.maps.event.addListener(map, 'click', function (event) {
        addMarker(event.latLng);
    });
    directionsDisplay.setMap(map);

    // Create the search box and link it to the UI element.
    var input = /** @type {HTMLInputElement} */(
        document.getElementById('pac-input'));
    map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

    var searchBox = new google.maps.places.SearchBox(
      /** @type {HTMLInputElement} */(input));

    // [START region_getplaces]
    // Listen for the event fired when the user selects an item from the
    // pick list. Retrieve the matching places for that item.
    google.maps.event.addListener(searchBox, 'places_changed', function () {
        var places = searchBox.getPlaces();

        if (places.length == 0) {
            return;
        }

        var bounds = new google.maps.LatLngBounds();
        for (var i = 0, place; place = places[i]; i++) {
            bounds.extend(place.geometry.location);
        }

        map.fitBounds(bounds);
    });
}

google.maps.event.addDomListener(window, 'load', initialize);
function addMarker(location) {
    marker.setMap(null);
    marker = new google.maps.Marker({
        position: location,
        map: map
    });

    latitud = location.lat();
    longitud = location.lng();
}
