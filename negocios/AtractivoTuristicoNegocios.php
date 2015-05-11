<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AtractivoTuristicoNegocios
 *
 * @author Gustavo
 */
include '../datos/AtractivoTuristicoDatos.php';
class AtractivoTuristicoNegocios {
    //put your code here
    
    private $atractivoDatos;
    
    public function AtractivoTuristicoNegocios() {
        $this->atractivoDatos = new AtractivoTuristicoDatos();
    }
    
    /*metodo para insertar un atractivo en la base de datos*/
    public function insertarAtractivo($atractivo) {
        /*se abre conexion a la base de datos*/
        $this->atractivoDatos->conectar();
        /*se inserta en la base de datos y se guarda el resultado retornado*/
        $resultado = $this->atractivoDatos->insertarAtractivo($atractivo);
        /*se cierra la conexion con la base de datos*/
        $this->atractivoDatos->cerrarConexion();
        /*se retorna el resultado obtenido*/
        return $resultado;
    }
    
   //método para actualizar un atractivo en la base de datos
    public function actualizarAtractivo($atractivo) {
        /*se abre conexion a la base de datos*/
        $this->atractivoDatos->conectar();
        /*se actualiza en la base de datos y se guarda el resultado retornado*/
        $resultado = $this->atractivoDatos->actualizarAtractivo($atractivo);
        /*se cierra la conexion con la base de datos*/
        $this->atractivoDatos->cerrarConexion();
        /*se retorna el resultado obtenido*/
        return $resultado;
    }
    
    //método para eliminar un atractivo en la base de datos
    public function eliminarAtractivo($idAtractivo) {
        $this->atractivoDatos->conectar();
        /*se elimina en la base de datos y se guarda el resultado retornado*/
        $resultado = $this->atractivoDatos->eliminarAtractivo($idAtractivo);
        /*se cierra la conexion con la base de datos*/
        $this->atractivoDatos->cerrarConexion();
        /*se retorna el resultado obtenido*/
        return $resultado;
    }
    
    //método para obtener un atractivo de la base de datos
    public function obtenerAtractivo($idAtractivo) {
        /*se abre conexion a la base de datos*/
        $this->atractivoDatos->conectar();
        /*se obtiene de la base de datos y se guarda el resultado retornado*/
        $resultado = $this->atractivoDatos->obtenerAtractivo($idAtractivo);
        /*se cierra la conexion con la base de datos*/
        $this->atractivoDatos->cerrarConexion();
        /*se retorna el resultado obtenido*/
        return $resultado;
    }
}

    