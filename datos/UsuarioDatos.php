<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UsuarioDatos
 *
 * @author Gustavo
 */
include_once '../datos/Conexion.php';
include '../dominio/Usuario.php';

class UsuarioDatos extends Conexion {

    //put your code here
    //metodo constructor
    public function UsuarioDatos() {
        parent::Conexion();
    }

    public function insertarUsuario($usuario) {
        $consulta = "insert into usuario (tipoUsuario,nombre,apellido1,apellido2,
            email,telefono,username,contrasenna,avatar) values(" . $usuario->tipoUsuario .
                ",'" . $usuario->nombre . "','" . $usuario->apellido1 . "', '" .
                $usuario->apellido2 . "', '" . $usuario->email . "', '" . $usuario->telefono .
                "', '" . $usuario->username . "', '" . $usuario->contrasenna .
                "', '" . $usuario->avatar . "');";
        $resultado = mysqli_query($this->connection, $consulta);
        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }

    //método para actualizar un usuario en la base de datos
    public function actualizarUsuario($usuario) {
        // se crea la consulta para actualizar un usuario en la base de datos
        $consulta = "Update usuario set nombre='" . $usuario->nombre . "',telefono='"
                . $usuario->telefono . "',email='" . $usuario->email . "', "
                . "avatar='" . $usuario->avatar . "', apellido1='" . $usuario->apellido1 . "',"
                . "apellido2='" . $usuario->apellido2 . "', username='" . $usuario->username . "'"
                . ", contrasenna='" . $usuario->contrasenna . "'
                where (idUsuario =" . $usuario->idUsuario . ");";

        //se ejecuta la consulta
        $resultado = mysqli_query($this->connection, $consulta);

        //se valida el resultado obtenido de la consulta
        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }

    //obtener un usuario de la base de datos
    public function obtenerUsuario($idUsuario) {
        // se ejecuta la consulta
        $consulta = mysqli_query($this->connection, "select* from usuario where idUsuario =" . $idUsuario);
        //se obtiene el resultado
        $resultado = $consulta->fetch_array();
        //se crea un usuario con el resultado obtenido en la base de datos
        $usuario = new Usuario($resultado['idUsuario'], $resultado['tipoUsuario']
                , $resultado['nombre'], $resultado['apellido1'], $resultado['apellido2'], $resultado['email'], $resultado['telefono'], $resultado['username'], $resultado['contrasenna'], $resultado['avatar']);
        // se retorna el atractivo
        return $usuario;
    }

    //obtener el ultimo registro de la base de datos
    public function obtenerUltimoRegistro() {
        // se ejecuta la consulta
        $consulta = mysqli_query($this->connection, "select MAX(idUsuario) as idUsuario from usuario");
        //se obtiene el resultado
        $resultado = $consulta->fetch_array();
        // se retorna el atractivo
        return $resultado['idUsuario'];
    }
    
    //obtener un usuario de la base de datos por su username y contraseña
    public function obtenerUsuarioLogin($username, $contrasenna) {
        // se ejecuta la consulta
        $consulta= mysqli_query($this->connection, "select* from usuario where username ='". $username
                                                    . "' and contrasenna='". $contrasenna ."'");
        //se obtiene el resultado
        $resultado = $consulta->fetch_array();
        //se crea un usuario con el resultado obtenido en la base de datos
        $usuario = new Usuario($resultado['idUsuario'], $resultado['tipoUsuario']
                , $resultado['nombre'], $resultado['apellido1'], $resultado['apellido2'],
                $resultado['email'], $resultado['telefono'], $resultado['username'],
                $resultado['contrasenna'], $resultado['avatar']);
        // se retorna el atractivo
        return $usuario;
    }

}
