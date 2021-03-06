<?php session_start(); ?>
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
                    <li></li>
                </ul>
            </div>    
        </div>

        <!------------------------------------  Side Bar section  ----------------------------------------------->

        <?php include './secciones/SideBar.php'; ?>
        
        <!------------------------------------  Content section  ----------------------------------------------->
        
        <div class="content">
        
        <div class="content_center">
                <h2> Obtener Recomendaciones </h2>
                <div class="middle_section">
                    <h2> Características </h2>
                    
                    <table id="check_caracteristicas">
                        <tr>
                            <td>
                                <input type="checkbox" id="c1"/>
                                <label for="c1"><span></span></label>
                            </td>
                            <td> Parqueo </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" id="c2"/>
                                <label for="c2"><span></span></label>
                            </td>
                            <td> Económico </td>
                        </tr>
                    </table>
                </div>
                <div class="middle_section" >
                    <h2> Tipo Turismo </h2>
                    
                    <table id="check_tipo_turismo">
                        <tr>
                            <td>
                                <input type="checkbox" id="c3"/>
                                <label for="c3"><span></span></label>
                            </td>
                            <td> Aventura </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" id="c4"/>
                                <label for="c4"><span></span></label>
                            </td>
                            <td> Cultural </td>
                        </tr>
                    </table>
                </div>
                <div class="middle_hor" style="width: 30%; padding-top: 0px;">
                    <SELECT id="cbxTipoAtractivo" SIZE=1> 
                        <OPTION VALUE="link pagina 1">Actividad</OPTION>
                        <OPTION VALUE="link pagina 2">Lugar</OPTION>
                    </SELECT> 
                    <input type="button" value="Obtener Recomendacion" onclick="registrarUsuario();" style="margin-top: 50px;"/>
                </div>
            </div>
            
        </div>
        
        <?php include './secciones/Footer.php'; ?>

    </body>
</html>
