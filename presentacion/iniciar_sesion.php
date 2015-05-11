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
        <script src="../js/administrarUsuario.js" type="text/javascript"></script>
    </head> 

    <body>

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

        <div class="content">

            <div class="content_center"> 
                <h2 style="width: 50%;margin-left: auto;margin-right: auto;margin-top: 60px;"> Iniciar Session </h2>
                
                <form class="login" id="login_form" action="../kvcBusiness/kvcUserLoginAction.php" method="post">
                    <input class="large" name="username" type="text" id="txtNombre" placeholder="Nombre de Usuario"/>
                    <input class="large" name="contrasenna" type="password" id="txtContrasenna" placeholder="Contraseña"/>
                    <input type="button" value="Iniciar" onclick="login()"/>
                </form>
                
            </div>
        </div>       

        <?php include './secciones/Footer.php'; ?>
    </body>
</html>

