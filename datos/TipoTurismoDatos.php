<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TipoTurismoDatos
 *
 * @author Gustavo
 */
include '../datos/Conexion.php';
include '../dominio/TipoTurismo.php';
class TipoTurismoDatos extends Conexion{
    //put your code here
    
    //metodo constructor
    public function TipoTurismoDatos(){
        //se llama a la clase padre
        parent::Conexion();
    }
    //metodo para insertar un Tipo Turismo en la base de datos
    public function insertarTipoTurismo($tipoTurismo) {
        // se crea la consulta para insetar un Tipo Turismo en la base de datos
        $consulta = "insert into tipoturismo (descripcion) values('" .
                $tipoTurismo->descripcion . "');";
        // se ejecuta la consulta
        $resultado = mysqli_query($this->connection, $consulta);
        //se valida el resultado obtenido
        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }
    
     //método para eliminar un TipoTurismo en la base de datos
    public function eliminarTipoTurismo($id) {
         // se crea la consulta para eliminar un tipoTurismo en la base de datos
        $consulta = "DELETE FROM tipoTurismo where(idTipoTurismo = ". $id .");";

        //se ejecuta la consulta
        $resultado = mysqli_query($this->connection, $consulta);

        //se valida el resultado obtenido de la consulta
        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }
    
    /*metodo para obtener tipoturismos de la BD*/
    public function obtenerTiposTurismo() {
        /*se crea la consulta*/
        $consulta = "select* from tipoTurismo";
        /*se realiza la consulta*/
        $resultado = mysqli_query($this->connection, $consulta);
        $arrayResultados = [];

        /*se obtienen los resultados*/
        while ($fila = mysqli_fetch_array($resultado)) {
            //se crea el servicio
            $tipoTurismo = new TipoTurismo($fila['idTipoTurismo'], $fila['descripcion']);
            array_push($arrayResultados, $tipoTurismo);

        }
        /*se retornan los servicios*/
        return $arrayResultados;
    }

}