<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TipoTurismoNegocios
 *
 * @author Gustavo
 */
include '../datos/TipoTurismoDatos.php';
class TipoTurismoNegocios {
    //atributos
    private $tipoTurismoD;
    
    public function TipoTurismoNegocios() {
        //clase encargada de la administracion de los datos del tipo turismo
        $this->tipoTurismoD = new TipoTurismoDatos();
    }
    
    //metodo para insertar un tipo Turismo en la base de datos
    public function insertarTipoTurismo($tipoTurismo) {
        //abre conexion a base de datos
        $this->tipoTurismoD->conectar();
        //se inserta un tipo Turismo a base de datos
        $resultado = $this->tipoTurismoD->insertarTipoTurismo($tipoTurismo);
        // se cierra conexion
        $this->tipoTurismoD->cerrarConexion();
        // se retorna la respuesta de la BD
        return $resultado;
    }
    
    //metodo para eliminar un tipo Turismo en la base de datos
    public function eliminarTipoTurismo($id) {
        //abre conexion a base de datos
        $this->tipoTurismoD->conectar();
        //se elimina un tipo Turismo a base de datos
        $resultado = $this->tipoTurismoD->eliminarTipoTurismo($id);
        // se cierra conexion
        $this->tipoTurismoD->cerrarConexion();
        // se retorna la respuesta de la BD
        return $resultado;
    }
    
    //metodo para obtener los tipos Turismo de la base de datos
    public function obtenerTiposTurismo() {
        //abre conexion a base de datos
        $this->tipoTurismoD->conectar();
        //se obtiene los tipos Turismo de la base de datos
        $resultado = $this->tipoTurismoD->obtenerTiposTurismo();
        // se cierra conexion
        $this->tipoTurismoD->cerrarConexion();
        // se retorna la respuesta de la BD
        return $resultado;
    }
}
