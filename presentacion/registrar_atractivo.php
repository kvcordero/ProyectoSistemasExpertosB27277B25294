<?php
    session_start();
    if ($_SESSION['idUsuario'] != "1") {
        header("location: ./index.php");
    } 
?>
<!DOCTYPE HTML>
<html lang="es-es" dir="ltr"  data-config='{"twitter":0,"plusone":0,"facebook":0,"style":"ms"}'>

    <head>
        <?php include './secciones/Head.php'; ?>
        <link href="../css/mapsStyle.css" rel="stylesheet" type="text/css"/>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=places"></script>
        <script type="text/javascript" src="../js/vestJS.js"></script> 
        <script type="text/javascript" src="../js/administrarAtractivo.js"></script> 
        <script src="../js/administrarAtractivo.js" type="text/javascript"></script>
        <script>
            $(function () {
                $("#txtFechaActividad").datepicker();
            });
        </script>
    </head> 

    <body onload="cargarServicios();cargarTipoTurismo()">

        <div class="topPage">
            <div class="top"> &nbsp;</div> 
            <div class="banner"><img src="../image/vest.png" alt="" id="banner"/></div>
            <div class="navigation">
                <ul>
                    <li><a href="./registrar_atractivo.php">Registrar Atractivo</a></li>
                    <li><a href="./modificar_atractivo.php">Modificar Atractivo</a></li>
                    <li><a href="./eliminar_atractivo.php">Eliminar Atractivo</a></li>
                </ul>
            </div>    
        </div>

        <!------------------------------------  Side Bar section  ----------------------------------------------->

        <?php include './secciones/SideBar.php'; ?>

        <!------------------------------------  Content section  ----------------------------------------------->
        <form enctype="multipart/form-data" id="formAtractivo" method="post">
            <div class="content">

                <div class="content_center" id="formulario_atractivo_1"> 
                    <h2> Registrar Atractivo </h2>

                    <div class="middle_section">
                        <table>
                            <tr><td><input class="large" type="text" name="txtNombre" id="txtNombre" placeholder="Nombre"/></td></tr>
                            <tr><td><input class="large" type="text" name="txtDescripcion" id="txtDescripcion" placeholder="Descripcion"/></td></tr>
                            <tr><td><input class="large" type="text" name="txtCorreo" id="txtCorreo" placeholder="Correo"/></td></tr>
                            <tr><td><input class="large" type="text" name="txtTelefono" id="txtTelefono" placeholder="Telefono"/></td></tr>
                            <tr><td>
                                    <SELECT name="cbxTipoAtractivo" id="cbxTipoAtractivo" SIZE=1> 
                                        <OPTION VALUE="1">Atractivo</OPTION>
                                        <OPTION VALUE="2">Actividad</OPTION>
                                    </SELECT> 
                                </td></tr>
                            <tr><td><input class="large" type="text" name="txtFechaActividad" id="txtFechaActividad" placeholder="Fecha Actividad"/></td></tr>
                            <tr><td><input class="large" type="text" name="txtPrecioActividad" id="txtPrecioActividad" placeholder="Precio Actividad"/></td></tr>

                        </table>
                    </div>

                    <div class="middle_section">
                        <h2> Foto Perfil </h2>
                        <img id="imgPerfil" src="../image/indice.jpg"/>
                        <input type="file" name="fsPerfil" id="fsPerfil" onchange="fileChange()"> 
                    </div>

                </div>

                <div class="content_center" id="formulario_atractivo_2" style="display: none">
                    <h2> Localizacion en el Mapa </h2>
                    <input id="pac-input" class="controls" type="text" placeholder="Search Box">
                    <div id="map-canvas"></div>
                </div>

                <div class="content_center" id="formulario_atractivo_3" style="display: none">
                    <h2> Modificar Atractivo </h2>
                    <div class="middle_section">
                        <h2> Características </h2>

                        <table id="check_caracteristicas">
                        </table>
                    </div>

                    <div class="middle_section" >
                        <h2> Tipo Turismo </h2>

                        <table id="check_tipo_turismo">
                        </table>
                    </div>

                    <div class="middle_hor">
                        <h2> Galeria </h2>
                        <span>Agregar imagen:</span><input onchange="multipleFilesChange()" type="file" name="fsGaleria[]" id="fsGaleria" multiple/>
                    </div>

                    <div class="middle_hor" id="galeria_atractivo">
                    </div>

                </div>

                <div class="underMenu">
                    <input type="button" id="btnAnterior" value="Anterior" onclick="anterior()" disabled/>
                    <input type="button" value="Registrar" onclick="tipoTurismos();"/>
                    <input type="button" id="btnSiguiente" value="Siguiente" onclick="siguiente();"/>                
                    <input type="hidden" value="1" id="pagina"/>
                </div>
            </div>       
        </form>
        <?php include './secciones/Footer.php'; ?>
    </body>
</html>