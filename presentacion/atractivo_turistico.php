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
        
        <!------------------------------------  Content section  ----------------------------------------------->
        
        <div class="content">

            <div class="content_center"> 
                <h2> Hotel Wagelia </h2>

                <div class="atractivo">
                    <img src="../image/wagelia.jpg" style="width: 40%"/>
                    <p>
                        Hoteles Wagelia & Lodge ha creado una nueva imagen, unificando su marca 
                        corporativa en sus tres hoteles para garantizar a nuestros clientes 
                        la calidad y el servicio que ha caracterizado a Wagelia en sus 22 años 
                        de experiencia en el sector turístico.
                    </p>
                </div>
                
                <div class="atractivo">
                    <div class="middle_section" > 
                        <h2> Características </h2>
                        <ol class="content_list">
                            <li>Correo: </li>
                            <li>Telefono: </li>
                            <li>Direccion: </li>
                        </ol>

                    </div>

                    <div class="middle_section"> 

                        <h2> Raiting </h2>

                        <span class="starRating">
                            <input id="rating5" type="radio" name="rating" value="5">
                            <label for="rating5">5</label>
                            <input id="rating4" type="radio" name="rating" value="4">
                            <label for="rating4">4</label>
                            <input id="rating3" type="radio" name="rating" value="3" checked>
                            <label for="rating3">3</label>
                            <input id="rating2" type="radio" name="rating" value="2">
                            <label for="rating2">2</label>
                            <input id="rating1" type="radio" name="rating" value="1">
                            <label for="rating1">1</label>
                        </span>

                    </div>
                </div>
                
                <div class="atractivo" >
                    <div class="middle_section"> 
                        <h2> Servicios </h2>
                        <ol class="content_list">
                            <li>Restaurante</li>
                            <li>Wi-fi</li>
                            <li>Economico</li>
                        </ol>
                    </div>

                    <div class="middle_section"> 
                        <h2> Tipo Turismo </h2>
                        <ol class="content_list">
                            <li>Monstala</li>
                            <li>Familiar</li>
                            <li>Descando</li>
                        </ol>
                    </div>
                </div>
                
                <div class="atractivo">
                    <h2> Localizacion en el Mapa </h2>
                </div>
                
                <div class="atractivo">
                    <h2> Galeria </h2>
                </div>
                
            </div>

        </div>
        <?php include './secciones/Footer.php'; ?>
            
    </body>
</html>
