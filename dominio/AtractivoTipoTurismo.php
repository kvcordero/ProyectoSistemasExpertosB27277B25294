<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AtractivoTipoTurismo
 *
 * @author Gustavo
 */
class AtractivoTipoTurismo {
    //atributos
    public $idAtractivo;
    public $idTipoTurismo;
    
    //metodo constructor
    public function AtractivoTipoTurismo($idAtractivo,$idTipoTurismo) {
        //inicializar variables
        $this->idAtractivo = $idAtractivo;
        $this->idTipoTurismo = $idTipoTurismo;
    }
}
