<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TipoAtractivo
 *
 * @author Gustavo
 */
class TipoAtractivo {
    //atributos
    public $idTipoAtractivo;
    public $descripcion;
    
    //metodo constructor
    public function TipoAtractivo($idTipoAtractivo,$descripcion) {
        $this->idTipoAtractivo = $idTipoAtractivo;
        $this->descripcion = $descripcion;
    }
}
