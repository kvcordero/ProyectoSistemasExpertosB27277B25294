<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UsuarioTipoTurismo
 *
 * @author Gustavo
 */
class UsuarioTipoTurismo {
    //atributos
    public $idUsuario;
    public $idTipoTurismo;
    
    //metodo constructor
    public function UsuarioTipoTurismo($idUsuario,$idTipoTurismo) {
        //inicializar variables
        $this->idUsuario = $idUsuario;
        $this->idTipoTurismo = $idTipoTurismo;
        
    }
}
