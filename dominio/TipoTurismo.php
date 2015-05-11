<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TipoTurismo
 *
 * @author Gustavo
 */
class TipoTurismo {
    //atributos
    public $idTipoTurismo;
    public $descripcion;
    
    //constructor
    public function TipoTurismo($idTipoTurismo,$descripcion) {
        //inicializar atributos
        $this->idTipoTurismo = $idTipoTurismo;
        $this->descripcion = $descripcion;        
    }
}
