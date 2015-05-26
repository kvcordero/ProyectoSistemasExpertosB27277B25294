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
        <script>
            $(function () {
                $("#txtFechaActividad").datepicker();
            });
        </script>
    </head> 

    <body>

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
                <h2> Administrar Servicios </h2>
                
                <input type="text" id="txtBuscar" placeholder="Atractivo" style="width: 25%; margin-left: 20%; margin-bottom: 50px"/>
                <input type="button" value="Burcar" onclick="registrarUsuario();"/>
                
                <table id="tbl_atractivos" class="info_table">
                    <tr>
                        <td> Imagen </td>
                        <td> Atractivo </td>
                        <td> Eliminar </td>
                    </tr>
                    <tr>
                        <td> <img src="../image/wagelia.jpg" /> </td>
                        <td>Holtel Wagelia </td>
                        <td> <a href="#"> Eliminar </a> </td>
                    </tr>
                    <tr>
                        <td> <img src="../image/wagelia.jpg" /> </td>
                        <td>Holtel Wagelia </td>
                        <td> <a href="#"> Eliminar </a> </td>
                    </tr>
                </table>

            </div>

        </div>
        
        <?php include './secciones/Footer.php'; ?>

    </body>
</html>
