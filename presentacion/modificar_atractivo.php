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
        <script type="text/javascript" src="../js/vestJS.js"></script> 
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

           <!------------------------------------  Formulario 1  ----------------------------------------------->
            <div class="content_center" id="formulario_atractivo_1"> 
                <h2> Modificar Atractivo </h2>
                
                <div class="middle_section" >
                    <table>
                        <tr><td><input class="large" type="text" id="txtNombre" placeholder="Nombre"/></td></tr>
                        <tr><td><input class="large" type="text" id="txtDescripcion" placeholder="Descripcion"/></td></tr>
                        <tr><td><input class="large" type="text" id="txtCorreo" placeholder="Correo"/></td></tr>
                        <tr><td><input class="large" type="text" id="txtDireccion" placeholder="Direccion"/></td></tr>
                        <tr><td><input class="large" type="text" id="txtTelefono" placeholder="Telefono"/></td></tr>
                        <tr><td>
                                <SELECT id="cbxTipoTurismo" SIZE=1> 
                                    <OPTION VALUE="link pagina 1">opcion1</OPTION>
                                    <OPTION VALUE="link pagina 2">opcion2</OPTION>
                                    <OPTION VALUE="link pagina 3">opcion3</OPTION>
                                    <OPTION VALUE="link pagina 4">opcion4</OPTION> 
                                </SELECT> 
                        </td></tr>
                        <tr><td>
                                <SELECT id="cbxTipoAtractivo" SIZE=1> 
                                    <OPTION VALUE="link pagina 1">opcion1</OPTION>
                                    <OPTION VALUE="link pagina 2">opcion2</OPTION>
                                    <OPTION VALUE="link pagina 3">opcion3</OPTION>
                                    <OPTION VALUE="link pagina 4">opcion4</OPTION> 
                                </SELECT> 
                        </td></tr>
                        <tr><td><input class="large" type="text" id="txtFechaActividad" placeholder="Fecha Actividad"/></td></tr>

                        <tr><td><input type="button" value="Registrar" onclick="registrarUsuario();"/></td></tr>
                    </table>
                </div>
                
                <div class="middle_section">
                    <h2> Foto Perfil </h2>
                    <img src="../image/avatar.jpg" />
                    <input type="file" id="file">                  
                    
                </div>
            </div>
            
            <!------------------------------------  Formulario 2  ----------------------------------------------->
            <div class="content_center" id="formulario_atractivo_2" style="display: none">
                <h2> Localizacion en el Mapa </h2>
            </div>
            
            <!------------------------------------  Formulario 3  ----------------------------------------------->
            <div class="content_center" id="formulario_atractivo_3" style="display: none">
                <h2> Modificar Atractivo </h2>
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
                            <td> Parqueo </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" id="c4"/>
                                <label for="c4"><span></span></label>
                            </td>
                            <td> Económico </td>
                        </tr>
                    </table>
                </div>
                <div class="middle_hor">
                    <h2> Galeria </h2>
                    <span>Agregar imagen:</span><input type="file" id="file">
                </div>
                <div class="middle_hor">
                    <img src="../image/avatar.jpg" />
                    <img src="../image/avatar.jpg" />
                    <img src="../image/avatar.jpg" />
                </div>

            </div>
            
            <div class="underMenu">
                <input type="button" id="btnAnterior" value="Anterior" onclick="anterior()" disabled/>
                <input type="button" value="Registrar" onclick="registrarUsuario();"/>
                <input type="button" id="btnSiguiente" value="Siguiente" onclick="siguiente();"/>                
                <input type="hidden" value="1" id="pagina"/>
            </div>
            
        </div>       

        <?php include './secciones/Footer.php'; ?>
    </body>
</html>