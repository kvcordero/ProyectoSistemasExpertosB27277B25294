<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UsuarioTipoTurismoDatos
 *
 * @author Gustavo
 */
include_once '../datos/Conexion.php';
include '../dominio/UsuarioTipoTurismo.php';
class UsuarioTipoTurismoDatos extends Conexion{
    //put your code here
    
    //metodo constructor
    public function UsuarioTipoTurismoDatos() {
        //constructor padre
        parent::Conexion();
    }
    
    //metodo para insertar un Usuario Tipo Turismo en la base de datos
    public function insertarUsuarioTipoTurismo($usuarioTipoTurismo) {
        // se crea la consulta para insetar un servicio en la base de datos
        $consulta = "insert into usuariotipoturismo (idUsuario,idTipoTurismo) values(" .
                $usuarioTipoTurismo->idUsuario . "," .
                $usuarioTipoTurismo->idTipoTurismo . ");";
        // se ejecuta la consulta
        $resultado = mysqli_query($this->connection, $consulta);
        //se valida el resultado obtenido
        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }
    
    //método para eliminar un Usuario Tipo Turismo en la base de datos
    public function eliminarUsuarioTipoTurismo($idUsuario) {
         // se crea la consulta para eliminar un Usuario Tipo Turismo en la base de datos
        $consulta = "Delete From usuariotipoturismo where(idUsuario = ". $idUsuario .");";

        //se ejecuta la consulta
        $resultado = mysqli_query($this->connection, $consulta);

        //se valida el resultado obtenido de la consulta
        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }
    
    //obtener los tipos de turismo de un usuario
    public function obtenerTiposTuristaUsuario($idUsuario) {
        $consulta = "SELECT * FROM usuariotipoturismo WHERE (idUsuario = ".$idUsuario.")";
        $resultado = mysqli_query($this->connection, $consulta);
        //array donde se guardan los resultados
        $arrayTipos = [];
        
        while ($fila = mysqli_fetch_array($resultado)) {
            // se guarda en el array
            array_push($arrayTipos, $fila['idTipoTurismo']);
        }
        
        return $arrayTipos;
        
    }
}
