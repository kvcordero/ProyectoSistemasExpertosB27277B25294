function registrarServicio(){
    var parametros = {
        'metodo':1,
        'descripcion':$("#txtDescripcion").val()
    };
    $.ajax({
        data: parametros,
        url: '../controlador/serviciosControlador.php',
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

function actualizarServicio(){
     var parametros = {
        'metodo':3,
        'idServicio':$("#txtDescripcion").val(),
        'descripcion':$("#txtDescripcion").val()
    };
    $.ajax({
        data: parametros,
        url: '../controlador/serviciosControlador.php',
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

function eliminarServicio(idServicio){
     var parametros = {
        'metodo':4,
        'idServicio':idServicio
    };
    $.ajax({
        data: parametros,
        url: '../controlador/serviciosControlador.php',
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

function cargarServicios(){
    var parametros = {
        'metodo':2
    };
    $.ajax({
        data: parametros,
        url: '../controlador/serviciosControlador.php',
        type: 'post',
        success: function (result) {
           $("#tbl_servivicos").html(result);
        },
        error: function (result){
            alert("Error de conexion");
        }
    });

}

