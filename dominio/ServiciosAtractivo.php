<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ServiciosAtractivo
 *
 * @author Gustavo
 */
class ServiciosAtractivo {
    //atributos
    public $idServicio;
    public $idAtractivo;
    
    //metodo constructor
    public function ServiciosAtractivo($idServicio,$idAtractivo) {
        //inicializar atributos
        $this->idServicio = $idServicio;
        $this->idAtractivo = $idAtractivo;
        
    }
}
