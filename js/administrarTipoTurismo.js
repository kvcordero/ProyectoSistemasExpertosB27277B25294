function registrarTipoTurismo(){
    var parametros = {
        'metodo':1,
        'descripcion':$("#txtDescripcion").val()
    };
    $.ajax({
        data: parametros,
        url: '../controlador/tipoTurismoControlador.php',
        type: 'post',
        dataType:'json',
        success: function (result) {
            if(result['codigo'] === 1){
                alert(result['mensaje']);
                $("#tbl_servivicos").html(result['servicios']);
            } else{
                alert(result['mensaje']);
            }
        },
        error: function (result){
            alert("Error de conexion");
        }
    });

}

function eliminarTipoTurismo(id){
     var parametros = {
        'metodo':3,
        'id':id
    };
    $.ajax({
        data: parametros,
        url: '../controlador/tipoTurismoControlador.php',
        type: 'post',
        dataType:'json',
        success: function (result) {
            if(result['codigo'] === 1){
                alert(result['mensaje']);
                $("#tbl_servivicos").html(result['servicios']);
            } else{
                alert(result['mensaje']);
            }
        },
        error: function (result){
            alert("Error de conexion");
        }
    });
}

function cargarTipoTurismo(){
    var parametros = {
        'metodo':2
    };
    $.ajax({
        data: parametros,
        url: '../controlador/tipoTurismoControlador.php',
        type: 'post',
        success: function (result) {
           $("#tbl_servivicos").html(result);
        },
        error: function (result){
            alert("Error de conexion");
        }
    });

}


