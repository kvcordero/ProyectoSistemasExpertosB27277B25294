<?php
    session_start();
    if (isset($_SESSION['idUsuario'])) {
        header("location: ./index.php");
    } 
?>
<!DOCTYPE HTML>
<html lang="es-es" dir="ltr"  data-config='{"twitter":0,"plusone":0,"facebook":0,"style":"ms"}'>

    <head>
        <?php include './secciones/Head.php'; ?>
        <script>
            $(function () {
                $("#txtFechaActividad").datepicker();
            });
        </script>
        <script src="../js/administrarUsuario.js" type="text/javascript"></script>
    </head> 

    <body onload="cargarTipoTurismo()">

        <div class="topPage">
            <div class="top"> &nbsp;</div> 
            <div class="banner"><img src="../image/vest.png" alt="" id="banner"/></div>
            <div class="navigation">
                <ul>
                    <li></li>
                </ul>
            </div>    
        </div>

        <!------------------------------------  Side Bar section  ----------------------------------------------->

        <?php include './secciones/SideBar.php'; ?>

        <!------------------------------------  Content section  ----------------------------------------------->
        <form enctype="multipart/form-data" id="formUsuario" method="post">
            <div class="content">

                <div class="content_center"> 
                    <h2> Registrarse </h2>

                    <div class="middle_section" style="padding-top: 10%;">
                        <table style="width: 100%">
                            <tr><td><input class="large" type="text" name="txtNombre" id="txtNombre" placeholder="Nombre"/></td></tr>
                            <tr><td><input class="large" type="text" name="txtApellido1" id="txtApellido1" placeholder="Apellido1"/></td></tr>
                            <tr><td><input class="large" type="text" name="txtApellido2" id="txtApellido2" placeholder="Apellido2"/></td></tr>
                            <tr><td><input class="large" type="text" name="txtCorreo" id="txtCorreo" placeholder="Correo"/></td></tr>
                            <tr><td><input class="large" type="text" name="txtTelefono" id="txtTelefono" placeholder="Teléfono"/></td></tr>
                            <tr><td><input class="large" type="text" name="txtUsuario" id="txtUsuario" placeholder="Username"/></td></tr>
                            <tr><td><input class="large" type="password" name="txtContrasenna"  id="txtContrasenna" placeholder="Contraseña"/></td></tr>
                            <tr><td><input type="button" value="Registrar" onclick="registrarUsuario();"/></td></tr>
                        </table>
                    </div>

                    <div class="middle_section">
                        <h2> Foto Perfil </h2>
                        <img id="image" src="../image/indice.jpg" />
                        <input name="file" type="file" id="file" onchange="fileChange()">                    
                        <h2> Tipo Turismo </h2>
                        <table id="check_caracteristicas">
                        </table>
                    </div>

                </div>


            </div>
        </form>
        <?php include './secciones/Footer.php'; ?>

    </body>
</html>
