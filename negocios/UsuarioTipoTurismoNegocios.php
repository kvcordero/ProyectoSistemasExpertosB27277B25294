<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UsuarioTipoTurismoNegocios
 *
 * @author Gustavo
 */
include '../datos/UsuarioTipoTurismoDatos.php';
class UsuarioTipoTurismoNegocios {
    //put your code here
    //clase que conecta con base de datos
    private $usuarioTipoTurismoD;
    
    public function UsuarioTipoTurismoNegocios() {
        $this->usuarioTipoTurismoD = new UsuarioTipoTurismoDatos();
    }
    
    //metodo para insertar un Usuario Tipo Turismo en la base de datos
    public function insertarUsuarioTipoTurismo($usuarioTipoTurismo) {
         /*se abre conexion a la base de datos*/
        $this->usuarioTipoTurismoD->conectar();
        /*se inserta en la base de datos y se guarda el resultado retornado*/
        $resultado = $this->usuarioTipoTurismoD->insertarUsuarioTipoTurismo($usuarioTipoTurismo);
        /*se cierra la conexion con la base de datos*/
        $this->usuarioTipoTurismoD->cerrarConexion();
        /*se retorna el resultado obtenido*/
        return $resultado;
    }
    
    //método para eliminar un Usuario Tipo Turismo en la base de datos
    public function eliminarUsuarioTipoTurismo($idUsuario) {
         /*se abre conexion a la base de datos*/
        $this->usuarioTipoTurismoD->conectar();
        /*se inserta en la base de datos y se guarda el resultado retornado*/
        $resultado = $this->usuarioTipoTurismoD->eliminarUsuarioTipoTurismo($idUsuario);
        /*se cierra la conexion con la base de datos*/
        $this->usuarioTipoTurismoD->cerrarConexion();
        /*se retorna el resultado obtenido*/
        return $resultado;
    }
    
    //obtener los tipos de turismo de un usuario
    public function obtenerTiposTuristaUsuario($idUsuario) {
         /*se abre conexion a la base de datos*/
        $this->usuarioTipoTurismoD->conectar();
        /*se elimina en la base de datos y se guarda el resultado retornado*/
        $resultado = $this->usuarioTipoTurismoD->obtenerTiposTuristaUsuario($idUsuario);
        /*se cierra la conexion con la base de datos*/
        $this->usuarioTipoTurismoD->cerrarConexion();
        /*se retorna el resultado obtenido*/
        return $resultado;
    }
}