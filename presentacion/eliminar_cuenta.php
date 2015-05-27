<?php
    session_start();
    if(!isset($_SESSION['idUsuario'])) {
        header("location: ./index.php");
    } 
?>
<!DOCTYPE HTML>
<html lang="es-es" dir="ltr"  data-config='{"twitter":0,"plusone":0,"facebook":0,"style":"ms"}'>

    <head>
        <?php include './secciones/Head.php'; ?>
    </head> 

    <body>

        <div class="topPage">
            <div class="top"> &nbsp;</div> 
            <div class="banner"><img src="../image/vest.png" alt="" id="banner"/></div>
            <div class="navigation">
                <ul>
                    <li><a href="./modificar_cuenta.php">Modificar Cuenta</a></li>
                    <li><a href="./eliminar_cuenta.php">Eliminar Cuenta</a></li>
                </ul>
            </div>    
        </div>

        <!------------------------------------  Side Bar section  ----------------------------------------------->

        <?php include './secciones/SideBar.php'; ?>

        <div class="content">

            <div class="content_center"> 
                <h2> VEST Personal Tours </h2>
                
                <ul>
                    <li><img style="padding-left: 35%; width: 25%;" src="../image/avatar.jpg" /></li>
                    <li><input type="button" id="btnEliminar" value="Eliminar" style="margin-left: 35%;"/></li>
                </ul>      

            </div>
        </div>       

        <?php include './secciones/Footer.php'; ?>
    </body>
</html>