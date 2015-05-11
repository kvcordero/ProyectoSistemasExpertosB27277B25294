<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author Gustavo
 */
class Usuario {
    //atributos
    public $idUsuario;
    public $tipoUsuario;
    public $nombre;
    public $apellido1;
    public $apellido2;
    public $email;
    public $telefono;
    public $username;
    public $contrasenna;
    public $avatar;
    
    //metodo constructor
    public function Usuario($idUsuario,$tipoUsuario,$nombre,$apellido1,
            $apellido2,$email,$telefono,$username,$contrasenna,$avatar) {
        //inicializar atributos
        $this->idUsuario = $idUsuario;
        $this->tipoUsuario = $tipoUsuario;
        $this->nombre = $nombre;
        $this->apellido1 = $apellido1;
        $this->apellido2 = $apellido2;
        $this->email = $email;
        $this->telefono = $telefono;
        $this->username = $username;
        $this->contrasenna = $contrasenna;
        $this->avatar = $avatar;
    }
}
