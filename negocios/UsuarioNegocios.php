<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UsuarioNegocios
 *
 * @author Gustavo
 */
include '../datos/UsuarioDatos.php';
class UsuarioNegocios {
    //put your code here
    private $usuarioD;
    
    //constructor
    public function UsuarioNegocios() {
        $this->usuarioD = new UsuarioDatos();
    }
    
    /*metodo para insertar un usuario en la base de datos*/
    public function insertarUsuario($usuario) {
        /*se abre conexion a la base de datos*/
        $this->usuarioD->conectar();
        /*se inserta en la base de datos y se guarda el resultado retornado*/
        $resultado = $this->usuarioD->insertarUsuario($usuario);
        /*se cierra la conexion con la base de datos*/
        $this->usuarioD->cerrarConexion();
        /*se retorna el resultado obtenido*/
        return $resultado;
    }
    
    /*metodo para actualizar un usuario en la base de datos*/
    public function actualizarUsuario($usuario) {
        /*se abre conexion a la base de datos*/
        $this->usuarioD->conectar();
        /*se actualiza en la base de datos y se guarda el resultado retornado*/
        $resultado = $this->usuarioD->actualizarUsuario($usuario);
        /*se cierra la conexion con la base de datos*/
        $this->usuarioD->cerrarConexion();
        /*se retorna el resultado obtenido*/
        return $resultado;
    }
    
     //obtener un usuario de la base de datos
    public function obtenerUsuario($idUsuario) {
        /*se abre conexion a la base de datos*/
        $this->usuarioD->conectar();
        /*se obtiene el usuario*/
        $resultado = $this->usuarioD->obtenerUsuario($idUsuario);
        /*se cierra la conexion con la base de datos*/
        $this->usuarioD->cerrarConexion();
        /*se retorna el resultado obtenido*/
        return $resultado;
    }
    /*obtener el ultimo registro de la tabla usuario*/
    public function obtenerUltimoRegistro() {
        /*se abre conexion a la base de datos*/
        $this->usuarioD->conectar();
        /*se obtiene el ultimo registro*/
        $resultado = $this->usuarioD->obtenerUltimoRegistro();
        /*se cierra la conexion con la base de datos*/
        $this->usuarioD->cerrarConexion();
        /*se retorna el resultado obtenido*/
        return $resultado;
    }
}
