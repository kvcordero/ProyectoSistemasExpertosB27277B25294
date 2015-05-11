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
        <script>
            $(function () {
                $("#txtFechaActividad").datepicker();
            });
        </script>
        <script src="../js/administrarServicio.js" type="text/javascript"></script>
    </head> 

    <body onload="cargarServicios()">

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

        <div class="sideBar">
            <div class="avatar">
                <img src="../image/avatar.jpg" />
                <a> Cerrar Sesion </a>
            </div>
            <div class="topSideBar"> Menu Principal  </div>
            <ul>
                <li><span onclick="showRegisterSection()">Iniciar Sesion</span></li>
                <li><span onclick="showActualizeSection()">Registrarse</span></li>
                <li><span onclick="showDeleteSection()">Ver Atractivos Turisticos</span></li>
                <li><span onclick="showSearchSection()">Obtener Recomendaciones</span></li>
            </ul>
        </div>

        <!------------------------------------  Side Bar section  ----------------------------------------------->

        <?php include './secciones/SideBar.php'; ?>
        
        <!------------------------------------  Content section  ----------------------------------------------->

        <div class="content">

            <div class="content_center">
                <h2> Administrar Servicios </h2>

                <input type="text" id="txtDescripcion" placeholder="Servicio" style="width: 25%; margin-left: 20%; margin-bottom: 50px"/>
                <input type="button" value="Insertar" onclick="registrarServicio();"/>

                <table id="tbl_servivicos" class="info_table">
                </table>

            </div>

        </div>

        <?php include './secciones/Footer.php'; ?>

    </body>
</html>
