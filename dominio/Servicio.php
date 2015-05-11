<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Servicio
 *
 * @author Gustavo
 */
class Servicio {
    //atributos
    public $idServicio;
    public $descripcion;
    
    //metodo constructor
    public function Servicio($idServicio,$descripcion) {
        //inicializar variables
        $this->idServicio = $idServicio;
        $this->descripcion = $descripcion;
    }
}
