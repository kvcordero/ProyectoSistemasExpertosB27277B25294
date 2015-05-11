<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CalificarAtractivo
 *
 * @author Gustavo
 */
class CalificarAtractivo {
    //atributos
    public $idAtractivo;
    public $idUsuario;
    public $calificacion;
    
    //metodo constructor
    public function CalificarAtractivo($idAtractivo,$idUsuario,$calificacion) {
        //inicializar atributos
        $this->idAtractivo = $idAtractivo;
        $this->idUsuario = $idUsuario;
        $this->calificacion = $calificacion;
    }
}
