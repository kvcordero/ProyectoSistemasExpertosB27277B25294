<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ServiciosNegocios
 *
 * @author Gustavo
 */
include '../datos/ServicioDatos.php';
class ServiciosNegocios {
    //put your code here
    
    //atributos
    private $serviciosD;
    
    public function ServiciosNegocios(){
        $this->serviciosD = new ServicioDatos();
    }
    
    //metodo para insertar un servicio en la base de datos
    public function insertarServicios($servicio) {
        //abre conexion a base de datos
        $this->serviciosD->conectar();
        //se inserta un servicio a base de datos
        $resultado = $this->serviciosD->insertarServicios($servicio);
        // se cierra conexion
        $this->serviciosD->cerrarConexion();
        // se retorna la respuesta de la BD
        return $resultado;
    }
    //método para actualizar un servico en la base de datos
    public function actualizarServicio($servicio) {
        //abre conexion a base de datos
        $this->serviciosD->conectar();
        //se actualiza un servicio a base de datos
        $resultado = $this->serviciosD->actualizarServicio($servicio);
        // se cierra conexion
        $this->serviciosD->cerrarConexion();
        // se retorna la respuesta de la BD
        return $resultado;
    }
    
    //método para eliminar un servicio en la base de datos
    public function eliminarServicio($idServicio) {
        //abre conexion a base de datos
        $this->serviciosD->conectar();
        //se elimina un servicio de la base de datos
        $resultado = $this->serviciosD->eliminarServicio($idServicio);
        // se cierra conexion
        $this->serviciosD->cerrarConexion();
        // se retorna la respuesta de la BD
        return $resultado;
    }
    
     /*metodo para obtener servicios de la BD*/
    public function obtenerServicios() {
        //abre conexion a base de datos
        $this->serviciosD->conectar();
        //se obtienen los servicios de la base de datos
        $resultado = $this->serviciosD->obtenerServicios();
        // se cierra conexion
        $this->serviciosD->cerrarConexion();
        // se retorna la respuesta de la BD
        return $resultado;
    }
   
}

