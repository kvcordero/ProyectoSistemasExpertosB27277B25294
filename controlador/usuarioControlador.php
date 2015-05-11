<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../negocios/TipoTurismoNegocios.php';
include '../negocios/UsuarioNegocios.php';
include '../negocios/UsuarioTipoTurismoNegocios.php';

$metodo = $_POST['metodo'];

switch ($metodo) {
    case 1:
        echo obtenerTiposTurismo();
        break;
    case 2:
        registrarUsuario();
        break;
    case 3:
        obtenerUsuario();
        break;
    case 4:
        echo obtenerUsuarioTiposTurismo();
        break;
    case 5:
        modificarUsuario();
    case 6:
        echo iniciarSesion();
        break;
    case 7:
        echo cerrarSesion();
        break;
}




/* metodo para obtener los Tipo Turismo de la BD */
function obtenerTiposTurismo() {
    $tipoTurismoN = new TipoTurismoNegocios();
    $tipoTurismos = $tipoTurismoN->obtenerTiposTurismo();
    $codigoHtml = "";
    foreach ($tipoTurismos as $tipoTurismo) {
        $codigoHtml .="<tr>
                        <td>
                         <input type='checkbox' name='tipoTurismo[]' id='" . $tipoTurismo->idTipoTurismo . "'/>
                         <label for='" . $tipoTurismo->idTipoTurismo . "'><span></span></label>
                       </td>
                       <td>" . $tipoTurismo->descripcion . "</td>"
                . "</tr>";
    }
    return $codigoHtml;
}

function registrarUsuario() {
    /*se crea el objeto usuario con los datos que sube el cliente*/
    $nombre = $_POST['txtNombre'];
    $apellido1 = $_POST['txtApellido1'];
    $apellido2 = $_POST['txtApellido2'];
    $email = $_POST['txtCorreo'];
    $telefono = $_POST['txtTelefono'];
    $username = $_POST['txtUsuario'];
    $contrasenna = $_POST['txtContrasenna'];
    $avatar = uploadImage();
    $usuario = new Usuario(0, 1, $nombre, $apellido1, $apellido2, $email, $telefono, $username, $contrasenna, $avatar);
    
    $usuarioN = new UsuarioNegocios();
    
    if($usuarioN->insertarUsuario($usuario)){
        tipoTurismo($usuarioN->obtenerUltimoRegistro());
        echo 'El usuario se ingreso correctamente';
    } else{
        echo 'Error de conexión a la Base de Datos';
    }
}

function uploadImage() {
    //comprobamos que sea una petición ajax
    if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {

        //obtenemos el archivo a subir
        $file = $_FILES['file']['name'];

        //comprobamos si existe un directorio para subir el archivo
        //si no es así, lo creamos
        if (!is_dir("../files/")) {
            mkdir("../files/", 0777);
        }

        //comprobamos si el archivo ha subido
        if ($file && move_uploaded_file($_FILES['file']['tmp_name'], "../files/" . $file)) {
            return "../files/".$file; //devolvemos el nombre del archivo para pintar la imagen
        }
    } else {
        throw new Exception("Error Processing Request", 1);
    }
    return "";
}

function tipoTurismo($idUsuario){
    $tipoTurismo = json_decode($_POST['tipoTurismo']);
    $cantidad = count($tipoTurismo);
    $usuarioTipoN = new UsuarioTipoTurismoNegocios();
    $usuarioTipoN->eliminarUsuarioTipoTurismo($idUsuario);
    for ($i = 0; $i < $cantidad; $i++) {
        $usuarioTipoN->insertarUsuarioTipoTurismo(new UsuarioTipoTurismo($idUsuario, $tipoTurismo[$i]));
    }
}

function obtenerUsuario(){
    header("Content-Type: application/json; charset=UTF-8");
    $idUsuario = $_POST['idUsuario'];
    
    $usuarioN = new UsuarioNegocios();
    $usuario = json_encode($usuarioN->obtenerUsuario($idUsuario));
    echo $usuario;
}

/* metodo para obtener los Tipo Turismo de la BD */
function obtenerUsuarioTiposTurismo() {
    $idUsuario = $_POST['idUsuario'];
    $tipoTurismoN = new TipoTurismoNegocios();
    $usuarioTiposTurismoN = new UsuarioTipoTurismoNegocios();
    $tipoTurismos = $tipoTurismoN->obtenerTiposTurismo();
    $tipoTurismoUsuario = $usuarioTiposTurismoN->obtenerTiposTuristaUsuario($idUsuario);
    $codigoHtml = "";
    foreach ($tipoTurismos as $tipoTurismo) {
        if( in_array($tipoTurismo->idTipoTurismo, $tipoTurismoUsuario)){
        $codigoHtml .="<tr>
                        <td>
                         <input type='checkbox' checked name='tipoTurismo[]' id='" . $tipoTurismo->idTipoTurismo . "'/>
                         <label for='" . $tipoTurismo->idTipoTurismo . "'><span></span></label>
                       </td>
                       <td>" . $tipoTurismo->descripcion . "</td>"
                . "</tr>";
        } else{
          $codigoHtml .="<tr>
                        <td>
                         <input type='checkbox'  name='tipoTurismo[]' id='" . $tipoTurismo->idTipoTurismo . "'/>
                         <label for='" . $tipoTurismo->idTipoTurismo . "'><span></span></label>
                       </td>
                       <td>" . $tipoTurismo->descripcion . "</td>"
                . "</tr>";  
        }
    }
    return $codigoHtml;
}

function modificarUsuario() {
    $usuarioN = new UsuarioNegocios();
    $usuarioAnterior = $usuarioN->obtenerUsuario(1);
    /*se crea el objeto usuario con los datos que sube el cliente*/
    $nombre = $_POST['txtNombre'];
    $apellido1 = $_POST['txtApellido1'];
    $apellido2 = $_POST['txtApellido2'];
    $email = $_POST['txtCorreo'];
    $telefono = $_POST['txtTelefono'];
    $username = $_POST['txtUsuario'];
    $contrasenna = $_POST['txtContrasenna'];
    if(empty($_FILES['file']['name'])) {
        $avatar = $usuarioAnterior->avatar;
    } else{
        $avatar = uploadImage();
    }
    $usuario = new Usuario(1, 1, $nombre, $apellido1, $apellido2, $email, $telefono, $username, $contrasenna, $avatar);    
    if($usuarioN->actualizarUsuario($usuario)){
        tipoTurismo(1);
        echo 'El usuario se actualizó correctamente';
    } else{
        echo 'Error de conexión a la Base de Datos';
    }
}

/* metodo para iniciar sesion */
function iniciarSesion(){
    
    $username = $_POST['username'];
    $contrasenna = $_POST['contrasenna'];
    
    $usuarioN = new UsuarioNegocios();
    $usuario = $usuarioN->obtenerUsuarioLogin($username, $contrasenna);
    

    if($usuario->idUsuario != null){
        
        session_start();
        $_SESSION['idUsuario'] = $usuario->idUsuario;
        $_SESSION['avatar'] = $usuario->avatar;
        $_SESSION['tipoUsuario'] = $usuario->tipoUsuario;
        
        return  "success";
    }else{
        return "error";
    }    
}

/* metodo para cerrar sesion */
function cerrarSesion() {
    
    session_start();    
    unset($_SESSION['idUsuario']);
    unset($_SESSION['avatar']);
    unset($_SESSION['tipoUsuario']);
    session_destroy();
    
    return "success";
}