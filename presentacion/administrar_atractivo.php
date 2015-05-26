<?php
    session_start();
    if ($_SESSION['tipoUsuario'] != "1") {
        header("location: ./index.php");
    } 
?>
<!DOCTYPE HTML>
<html lang="es-es" dir="ltr"  data-config='{"twitter":0,"plusone":0,"facebook":0,"style":"ms"}'>

    <head>
        <?php include './secciones/Head.php'; ?>
        <script src="../js/administrarServicio.js" type="text/javascript"></script>
    </head> 

    <body onload="cargarServicios()">

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

        <div class="content">

            <div class="content_center">
                <h2> Administrar Atractivo </h2>

                <ol class="content_list" style="margin-left: 35%;">
                    <li><a href="./registrar_atractivo.php">Registrar Atractivo</a></li>
                    <li><a href="./modificar_atractivo.php">Modificar Atractivo</a></li>
                    <li><a href="./eliminar_atractivo.php">Eliminar Atractivo</a></li>
                </ol>

            </div>

        </div>

        <?php include './secciones/Footer.php'; ?>

    </body>
</html>
