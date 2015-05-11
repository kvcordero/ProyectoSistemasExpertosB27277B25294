<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../negocios/ServiciosNegocios.php';

$metodo = $_POST['metodo'];
//$metodo = 2;

switch ($metodo){
    case 1: 
        registrarServicio();   
        break;
    case 2:
        echo obtenerServicios();
        break;
    case 4:
        eliminarServicio();
        break;
}


/*inserta un servicio en la base de datos*/
function registrarServicio() {
    /*obtener atributos a guardar*/
    $descripcion = $_POST['descripcion'];
    /*se crea el servicio*/
    $servicio = new Servicio(0, $descripcion);
    /*se guarda el servicio en la base de datos*/
    $serviciosN = new ServiciosNegocios();
    $resultado = $serviciosN->insertarServicios($servicio);
    header("Content-Type: application/json; charset=UTF-8");
    if($resultado){
        $respuesta =[
            'codigo'=>1,
            'mensaje'=>'El servicio se guardó correctamente ',
            'servicios'=> obtenerServicios()];
    } else {
        $respuesta =[
            'codigo'=> 0,
            'mensaje'=>'Error en la conexión a la Base de Datos'];
    }
    echo json_encode($respuesta);
}

/*elimina un servicio en la base de datos*/
function eliminarServicio() {
    /*obtener atributos a guardar*/
    $idServicio = $_POST['idServicio'];
    /*se elimina el servicio en la base de datos*/
    $serviciosN = new ServiciosNegocios();
    $resultado = $serviciosN->eliminarServicio($idServicio);
    header("Content-Type: application/json; charset=UTF-8");
    if($resultado){
        $respuesta =[
            'codigo'=>1,
            'mensaje'=>'El servicio se eliminó correctamente ',
            'servicios'=> obtenerServicios()];
    } else {
        $respuesta =[
            'codigo'=> 0,
            'mensaje'=>'Error en la conexión a la Base de Datos'];
    }
    echo json_encode($respuesta);
}

/*metodo para obtener los servicios de la BD */
function obtenerServicios() {
    $serviciosN = new ServiciosNegocios();
    $servicios = $serviciosN->obtenerServicios();
    //$codigoHtml = "<table id='tbl_servivicos' class='info_table'>";
    $codigoHtml = "<tr>
                        <td> Servicios </td>
                        <td> Eliminar </td>
                    </tr>";
    foreach ($servicios as $servicio){
        $codigoHtml .="<tr>"
                . "<td>". $servicio->descripcion ."</td>"
                . "<td><a href='#' onclick=eliminarServicio('". $servicio->idServicio ."')>Eliminar</a></td>"
                . "</tr>"; 
    }
    //$codigoHtml += "</table>";
    return $codigoHtml;
}
