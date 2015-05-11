<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AtractivoTuristico
 *
 * @author Gustavo
 */
class AtractivoTuristico {
    //atributos
    public $idAtractivo;
    public $nombre;
    public $telefono;
    public $email;
    public $descripcion;
    public $latitud;
    public $longitud;
    public $direccion;
    public $imagen;
    public $tipoAtractivo;
    public $precio;
    public $fecha;
    
    //metodo constructor
    public function AtractivoTuristico($idAtractivo,$nombre,$telefono,$email,
            $descripcion,$latitud,$longitud,$direccion,$imagen,$tipoAtractivo
            ,$precio,$fecha) {
        //inicializar atributos
        $this->idAtractivo = $idAtractivo;
        $this->nombre = $nombre;
        $this->telefono = $telefono;
        $this->email = $email;
        $this->descripcion = $descripcion;
        $this->latitud = $latitud;
        $this->longitud = $longitud;
        $this->direccion = $direccion;
        $this->imagen = $imagen;
        $this->tipoAtractivo = $tipoAtractivo;
        $this->precio = $precio;
        $this->fecha = $fecha;
        
    }
}
