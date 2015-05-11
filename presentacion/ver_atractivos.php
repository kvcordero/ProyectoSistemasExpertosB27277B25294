<?php session_start(); ?>
<!DOCTYPE HTML>
<html lang="es-es" dir="ltr"  data-config='{"twitter":0,"plusone":0,"facebook":0,"style":"ms"}'>

    <head>
        <?php include './secciones/Head.php'; ?>
        <script>
            $(function() { 
                $( "#txtFechaActividad" ).datepicker();
            });
        </script>
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
        
        <!------------------------------------  Content section  ----------------------------------------------->
        
        <div class="content">

            <div class="content_center"> 
                <h2> Atractivos Turisticos </h2>

                <div class="atractivo">
                    <img src="../image/wagelia.jpg" />
                    <a> Hotel Wagelia </a>
                    <p>
                        Pequeña descripcion del hotel, no se me ocurre nada asi que escribo lo que sea que se me 
                        ocurra asdasd asd asdasd asd as dasd asd asd asd as dasd asd asd asd asd asd asd asdqweqw
                        asd sdf sgdfg dfgh fhj gyjrerdtgwafasfsdgdfhgh 
                    </p>
                </div>
                
                <div class="atractivo">
                    <img src="../image/wagelia.jpg" />
                    <a> Hotel Wagelia </a>
                    <p>
                        Pequeña descripcion del hotel, no se me ocurre nada asi que escribo lo que sea que se me 
                        ocurra asdasd asd asdasd asd as dasd asd asd asd as dasd asd asd asd asd asd asd asdqweqw
                        asd sdf sgdfg dfgh fhj gyjrerdtgwafasfsdgdfhgh 
                    </p>
                </div>
                
                <div class="atractivo">
                    <img src="../image/wagelia.jpg" />
                    <a> Hotel Wagelia </a>
                    <p>
                        Pequeña descripcion del hotel, no se me ocurre nada asi que escribo lo que sea que se me 
                        ocurra asdasd asd asdasd asd as dasd asd asd asd as dasd asd asd asd asd asd asd asdqweqw
                        asd sdf sgdfg dfgh fhj gyjrerdtgwafasfsdgdfhgh 
                    </p>
                </div>
            </div>
            
            <div class="content_center">
                <h2> Hotel Wagelia </h2>
                
                <div class="middle_hor" >
                    <img src="../image/wagelia.jpg" />
                    <p>
                        Pequeña descripcion del hotel, no se me ocurre nada asi que escribo lo que sea que se me 
                        ocurra asdasd asd asdasd asd as dasd asd asd asd as dasd asd asd asd asd asd asd asdqweqw
                        asd sdf sgdfg dfgh fhj gyjrerdtgwafasfsdgdfhgh 
                    </p>
                </div>
            </div>


        </div>
        <?php include './secciones/Footer.php'; ?>
            
    </body>
</html>
