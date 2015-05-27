<?php session_start(); ?>
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
                    <li></li>
                </ul>
            </div>    
        </div>

        <!------------------------------------  Side Bar section  ----------------------------------------------->

        <?php include './secciones/SideBar.php'; ?>

        <div class="content">

            <div class="content_center"> 
                <h2> VEST Personal Tours </h2>

                <div class="atractivo">
                    <img src="../image/vest_logo.jpg" style="width: 35%" />
                    <a> Hotel Wagelia </a>
                    <p>
                        Bienvenido a la mejor pagina de recomendaciones turisticas de Costa Rica, 
                        en nuestra pagina podras obtener información sobre paraderos turisticos, hoteles,
                        restaurantes, museos, actividades y demas.
                        
                        Esperamos disfrutes de nuestros servicios.
                    </p>
                </div>
                
            </div>
        </div>       

        <?php include './secciones/Footer.php'; ?>
    </body>
</html>