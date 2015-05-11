<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TipoUsuario
 *
 * @author Gustavo
 */
class TipoUsuario {
    //atributos
    
    public $idTipoUsuario;
    public $descripcion;
    
    //metodo constructor
    public function TipoUsuario($idTipoUsuario, $descripcion) {
        //inicializar atributos
        $this->idTipoUsuario = $idTipoUsuario;
        $this->descripcion = $descripcion;        
    }
       
}
