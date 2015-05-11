<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ServicioDatos
 *
 * @author Gustavo
 */
include_once '../datos/Conexion.php';
include '../dominio/Servicio.php';

class ServicioDatos extends Conexion {

    //put your code here

    /* metodo constructor */
    public function ServicioDatos() {
        //se llama al metodo padre
        parent::Conexion();
    }

    //metodo para insertar un servicio en la base de datos
    public function insertarServicios($servicio) {
        // se crea la consulta para insetar un servicio en la base de datos
        $consulta = "insert into servicio (descripcion) values('" .
                $servicio->descripcion . "');";
        // se ejecuta la consulta
        $resultado = mysqli_query($this->connection, $consulta);
        //se valida el resultado obtenido
        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }
    
    //método para actualizar un servico en la base de datos
    public function actualizarServicio($servicio) {
         // se crea la consulta para actualizar un servico en la base de datos
        $consulta = "Update servicio set descripcion='" . $servicio->descripcion . "'
                where (idServicio=" . $servicio->idServico . ");";
        
        //se ejecuta la consulta
        $resultado = mysqli_query($this->connection, $consulta);

        //se valida el resultado obtenido de la consulta
        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }
    
     //método para eliminar un servicio en la base de datos
    public function eliminarServicio($idServicio) {
         // se crea la consulta para eliminar un servicio en la base de datos
        $consulta = "DELETE FROM servicio where(idServicio = ". $idServicio .");";

        //se ejecuta la consulta
        $resultado = mysqli_query($this->connection, $consulta);

        //se valida el resultado obtenido de la consulta
        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }
    
    /*metodo para obtener servicios de la BD*/
    public function obtenerServicios() {
        /*se crea la consulta*/
        $consulta = "select* from servicio";
        /*se realiza la consulta*/
        $resultado = mysqli_query($this->connection, $consulta);
        $arrayServicios = [];

        /*se obtienen los resultados*/
        while ($fila = mysqli_fetch_array($resultado)) {
            //se crea el servicio
            $servicio = new Servicio($fila['idServicio'], $fila['descripcion']);
            array_push($arrayServicios, $servicio);

        }
        /*se retornan los servicios*/
        return $arrayServicios;
    }

}