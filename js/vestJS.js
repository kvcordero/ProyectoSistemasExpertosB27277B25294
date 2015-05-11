//-------------------------------------------------------------------------------------------------
//                   Metodo que muestra el formulario siguiente
//-------------------------------------------------------------------------------------------------
function siguiente(){
    
    var pagina = parseInt($('#pagina').val());
    
    if(pagina == 1){        
        $('#formulario_atractivo_1').css("display","none");
        $('#formulario_atractivo_2').fadeIn("slow"); 
        $('#btnAnterior').prop( "disabled", false );
    }
    
    if(pagina == 2){        
        $('#formulario_atractivo_2').css("display","none");                
        $('#formulario_atractivo_3').fadeIn("slow");   
        $('#btnSiguiente').prop( "disabled", true );
    }
    
    $('#pagina').val(pagina+1);
}

//-------------------------------------------------------------------------------------------------
//                              Metodo que muestra el formulario anterior
//-------------------------------------------------------------------------------------------------
function anterior(){
    
    var pagina = $('#pagina').val();
    
    if(pagina == 2){        
        $('#formulario_atractivo_2').css("display","none");
        $('#formulario_atractivo_1').fadeIn("slow");
        $('#btnAnterior').prop( "disabled", true );
    }
    
    if(pagina == 3){        
        $('#formulario_atractivo_3').css("display","none");
        $('#formulario_atractivo_2').fadeIn("slow");  
        $('#btnSiguiente').prop( "disabled", false );
    }
    
    $('#pagina').val(pagina-1);
}


//-------------------------------------------------------------------------------------------------
//                              Metodo que cierra la session
//-------------------------------------------------------------------------------------------------
function cerrarSesion() {
    var parametros = {
        'metodo': 6
    };
    $.ajax({
        data: parametros,
        url: '../controlador/usuarioControlador.php',
        type: 'post',
        success: function (result) {
            window.location.reload();
        },
        error: function (result) {
            alert("Error de conexion");
        }
    });
}