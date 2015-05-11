/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function cargarTipoTurismo() {
    var parametros = {
        'metodo': 1
    };
    $.ajax({
        data: parametros,
        url: '../controlador/usuarioControlador.php',
        type: 'post',
        success: function (result) {
            $("#check_caracteristicas").html(result);
        },
        error: function (result) {
            alert("Error de conexion");
        }
    });

}
var tiposTurismo = [];
function registrarUsuario() {
    var formData = new FormData($("#formUsuario")[0]);
    formData.append("metodo", 2);
    tipoTurismos();
    formData.append("tipoTurismo",  JSON.stringify(tiposTurismo));
    $.ajax({
        data: formData,
        url: '../controlador/usuarioControlador.php',
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
    tipoTurismo = $('input[type=checkbox]');
    tiposTurismo = [];
    for (var i = 0; i < tipoTurismo.length; i++) {
        if (tipoTurismo[i].checked) {
            tiposTurismo.push(tipoTurismo[i].id);
        }

    }
}

function fileChange() {
    var file = $("#file")[0].files[0];
    var reader = new FileReader();
    reader.onload = function (e) {
        $('#image').attr('src', e.target.result);
    };
    reader.readAsDataURL(file);
}

function obtenerUsuario(idUsuario){
     var parametros = {
        'metodo':3,
        'idUsuario':idUsuario
    };
    $.ajax({
        data: parametros,
        url: '../controlador/usuarioControlador.php',
        type: 'post',
        dataType:'json',
        success: function (result) {
           $("#txtNombre").val(result.nombre);
           $("#txtApellido1").val(result.apellido1);
           $("#txtApellido2").val(result.apellido2);
           $("#txtCorreo").val(result.email);
           $("#txtTelefono").val(result.telefono);
           $("#txtUsuario").val(result.username);
           $("#txtContrasenna").val(result.contrasenna);
           $('#image').attr('src', result.avatar);
        },
        error: function (result){
            alert("Error de conexion");
        }
    });
}

function cargarTipoTurismoUsuario(idUsuario) {
    var parametros = {
        'metodo': 4,
        'idUsuario':idUsuario
    };
    $.ajax({
        data: parametros,
        url: '../controlador/usuarioControlador.php',
        type: 'post',
        success: function (result) {
            $("#check_caracteristicas").html(result);
        },
        error: function (result) {
            alert("Error de conexion");
        }
    });

}

function modificarUsuario() {
    var formData = new FormData($("#formUsuario")[0]);
    formData.append("metodo", 5);
    tipoTurismos();
    formData.append("tipoTurismo",  JSON.stringify(tiposTurismo));
    $.ajax({
        data: formData,
        url: '../controlador/usuarioControlador.php',
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