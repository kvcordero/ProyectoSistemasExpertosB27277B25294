<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../negocios/TipoTurismoNegocios.php';

$metodo = $_POST['metodo'];
//$metodo = 3;
switch ($metodo){
    case 1: 
        registrarTipoTurismo();   
        break;
    case 2:
        echo obtenerTiposTurismo();
        break;
    case 3:
        eliminarTipoTurismo();
        break;
}


/*inserta un Tipo Turismo en la base de datos*/
function registrarTipoTurismo() {
    /*obtener atributos a guardar*/
    $descripcion = $_POST['descripcion'];
    /*se crea el Tipo Turismo*/
    $tipoTurismo= new TipoTurismo(0, $descripcion);
    /*se guarda el Tipo Turismo en la base de datos*/
    $tipoTurismoN = new TipoTurismoNegocios();
    $resultado = $tipoTurismoN->insertarTipoTurismo($tipoTurismo);
    //protocolo para utilizar json
    header("Content-Type: application/json; charset=UTF-8");
    if($resultado){
        $respuesta =[
            'codigo'=>1,
            'mensaje'=>'El servicio se guardó correctamente ',
            'servicios'=> obtenerTiposTurismo()];
    } else {
        $respuesta =[
            'codigo'=> 0,
            'mensaje'=>'Error en la conexión a la Base de Datos'];
    }
    // se responde por medio de json
    echo json_encode($respuesta);
}

/*elimina un Tipo Turismo en la base de datos*/
function eliminarTipoTurismo() {
    /*obtener atributos a guardar*/
    $id = $_POST['id'];
    /*se guarda el Tipo Turismo en la base de datos*/
    $tipoTurismoN = new TipoTurismoNegocios();
    $resultado = $tipoTurismoN->eliminarTipoTurismo($id);
    //protocolo para utilizar json
    header("Content-Type: application/json; charset=UTF-8");
    if($resultado){
        /*respuesta json*/
        $respuesta =[
            'codigo'=>1,
            'mensaje'=>'El Tipo de Turismo se eliminó correctamente ',
            'servicios'=> obtenerTiposTurismo()];
    } else {
        $respuesta =[
            'codigo'=> 0,
            'mensaje'=>'Error en la conexión a la Base de Datos'];
    }
    // se responde por medio de json
    echo json_encode($respuesta);
}

/*metodo para obtener los Tipo Turismo de la BD */
function obtenerTiposTurismo() {
    $tipoTurismoN = new TipoTurismoNegocios();
    $tipoTurismos = $tipoTurismoN->obtenerTiposTurismo();
    //$codigoHtml = "<table id='tbl_servivicos' class='info_table'>";
    $codigoHtml = "<tr>
                        <td> Tipo Turismo </td>
                        <td> Eliminar </td>
                    </tr>";
    foreach ($tipoTurismos as $tipoTurismo){
        $codigoHtml .="<tr>"
                . "<td>". $tipoTurismo->descripcion ."</td>"
                . "<td><a href='#' onclick=eliminarTipoTurismo('". $tipoTurismo->idTipoTurismo ."')>Eliminar</a></td>"
                . "</tr>"; 
    }
    //$codigoHtml += "</table>";
    return $codigoHtml;
}