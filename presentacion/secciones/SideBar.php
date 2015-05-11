<div class="sideBar">

    <div class="avatar">
        <?php
            if (isset($_SESSION["avatar"])) {
                echo "<img src='" . $_SESSION["avatar"] . "' />";
                echo "<a onclick='cerrarSesion()'> Cerrar Sesion </a>";
            }
        ?>
    </div>

    <div class="topSideBar"> Menu Principal  </div>
    <ul>
        <?php
            if (!isset($_SESSION["tipoUsuario"])) {
                echo "<li><a href='./iniciar_sesion.php'>Iniciar Sesion</a></li>".
                "<li><a href='./registrarse.php'>Registrarse</a></li>".
                "<li><a href='./ver_atractivos.php'>Ver Atractivos Turisticos</span></a></li>".
                "<li><a href='./obtener_recomendaciones.php'>Obtener Recomendaciones</a></li>";                    
            }else{
                
                if($_SESSION["tipoUsuario"] == "1"){
                    echo "<li><a href='#'>Cuenta Administrador</a></li>".
                    "<li><a href='#'>Cuenta Turista</a></li>".
                    "<li><a href='#'>Atractivos Turisticos</a></li>".
                    "<li><a href='./administrar_servicios.php'>Servicios</a></li>".
                    "<li><a href='./administrar_tipo_turismo.php'>Tipo Turismo</a></li>";
                }else{
                    echo "<li><a href='#'>Mi cuenta</a></li>".
                    "<li><a href='./ver_atractivos.php'>Ver Atractivos Turisticos</a></li>".
                    "<li><a href='./obtener_recomendaciones.php'>Obtener Recomendaciones</a></li>";
                }
                
            }
        ?>
        
    </ul>
</div>