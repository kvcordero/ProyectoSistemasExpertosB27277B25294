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
        mapTypeId: google.maps.MapTypeId.HYBRID
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

function cargarServicios() {
    var parametros = {
        'metodo': 1
    };
    $.ajax({
        data: parametros,
        url: '../controlador/atractivoControlador.php',
        type: 'post',
        success: function (result) {
            $("#check_caracteristicas").html(result);
        },
        error: function (result) {
            alert("Error de conexion");
        }
    });
}

function cargarTipoTurismo() {
    var parametros = {
        'metodo': 1
    };
    $.ajax({
        data: parametros,
        url: '../controlador/usuarioControlador.php',
        type: 'post',
        success: function (result) {
            $("#check_tipo_turismo").html(result);
        },
        error: function (result) {
            alert("Error de conexion");
        }
    });
}

function multipleFilesChange() {
    $('#galeria_atractivo').html("");
    var files = $("#fsGaleria")[0].files;
    for(var i = 0; i < files.length; i++){
        var reader = new FileReader();
        reader.onload = function (e) {
            var codigoHtml = "<img src='"+ e.target.result +"'/>";
            $('#galeria_atractivo').append(codigoHtml);
        };
        reader.readAsDataURL(files[i]);
    }
}
var tiposTurismo = [];
function registrarAtractivo(){
    //se obtiene todos los elementos disponibles en el div
    var formData = new FormData($("#formAtractivo")[0]);
    //se agrega informacionadiciona
    formData.append("metodo", 2);
    formData.append("latitud",  latitud);
    formData.append("longitud",  longitud);
    /*tipoTurismos();
    formData.append("tipoTurismo",  JSON.stringify(tiposTurismo));*/
    $.ajax({
        data: formData,
        url: '../controlador/atractivoControlador.php',
        type: 'post',
        cache: false,
        contentType: false,
        processData: false,
        success: function (result) {
            alert(result);
        },
        error: function (result) {
            alert("Error de conexion");
        }
    });
}

function tipoTurismos() {
    var tipoTurismo = $('input:checkbox[name=servicios[]]').serializeArray();
    alert(tipoTurismo[0]);
    /*tiposTurismo = [];
    for (var i = 0; i < tipoTurismo.length; i++) {
        if (tipoTurismo[i].checked) {
            alert(tipoTurismo[i].id);
            tiposTurismo.push(tipoTurismo[i].id);
        }

    }*/
}