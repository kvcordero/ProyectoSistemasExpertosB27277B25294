<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AtractivoTuristicoDatos
 *
 * @author Gustavo
 */
include_once '../datos/Conexion.php';
include '../dominio/AtractivoTuristico.php';

class AtractivoTuristicoDatos extends Conexion {

    //put your code here
    //metodo constructor
    public function AtractivoTuristicoDatos() {
        // se inicializa la clase conexion
        parent::Conexion();
    }

    //metodo para insertar un atractivo en la base de datos
    public function insertarAtractivo($atractivo) {
        // se crea la consulta para insetar un atractivo en la base de datos
        $consulta = "insert into atractivoturistico (nombre,telefono,email,descripcion,"
                . "latitud,longitud,direccion,imagen,tipoAtractivo,precio,fecha)"
                . " values('" . $atractivo->nombre . "','" . $atractivo->telefono .
                "','" . $atractivo->email . "', '" . $atractivo->descripcion .
                "', " . $atractivo->latitud . ", " . $atractivo->longitud .
                ", '" . $atractivo->direccion . "', '" . $atractivo->imagen .
                "', '" . $atractivo->tipoAtractivo . "', " . $atractivo->precio .
                ", '" . $atractivo->fecha . "');";

        // se ejecuta la consulta
        $resultado = mysqli_query($this->connection, $consulta);

        //se valida el resultado obtenido
        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }

    //método para actualizar un atractivo en la base de datos
    public function actualizarAtractivo($atractivo) {
         // se crea la consulta para actualizar un atractivo en la base de datos
        $consulta = "Update atractivoturistico set nombre='" . $atractivo->nombre . "',telefono='"
                . $atractivo->telefono . "',email='" . $atractivo->email . "',descripcion='"
                . $atractivo->descripcion . "', latitud=". $atractivo->latitud 
                .", longitud=". $atractivo->longitud .", direccion= '". 
                $atractivo->direccion ."', imagen='". $atractivo->imagen ."',
                tipoAtractivo=". $atractivo->tipoAtractivo .", precio=".
                $atractivo->precio.", fecha='".$atractivo->fecha."'
                where (idAtractivo=" . $atractivo->idAtractivo . ");";
        
        //se ejecuta la consulta
        $resultado = mysqli_query($this->connection, $consulta);

        //se valida el resultado obtenido de la consulta
        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }
    
    //método para eliminar un atractivo en la base de datos
    public function eliminarAtractivo($idAtractivo) {
         // se crea la consulta para eliminar un atractivo en la base de datos
        $consulta = "Delete From atractivoturistico where(idAtractivo = ". $idAtractivo .");";

        //se ejecuta la consulta
        $resultado = mysqli_query($this->connection, $consulta);

        //se valida el resultado obtenido de la consulta
        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }
    
    //obtener un atractivo de la base de datos
    public function obtenerAtractivo($idAtractivo) {
        // se ejecuta la consulta
        $consulta= mysqli_query($this->connection, "select* from atractivoturistico where idAtractivo =". $idAtractivo);
        //se obtiene el resultado
        $resultado = $consulta->fetch_array();
        //se crea un atractivo con el resultado obtenido en la base de datos
        $atractivo = new AtractivoTuristico($resultado['idAtractivo'], $resultado['nombre'],
                $resultado['telefono'], $resultado['email'], $resultado['descripcion'],
                $resultado['latitud'], $resultado['longitud'], $resultado['direccion'],
                $resultado['imagen'], $resultado['tipoAtractivo'], $resultado['precio'],
                $resultado['fecha']);  
        // se retorna el atractivo
        return $atractivo;
    }
    
    /*public function obtenerAtractivos() {
        $consulta = "select* from atractivoturistico";
        $resultado = mysqli_query($this->connection, $consulta);
        $arrayCliente = [];

        while ($fila = mysqli_fetch_array($resultado)) {
            $clente = new Cliente($fila['codigoPersona'], $fila['identificacionPersona'],$fila['nombrePersona'],
                $fila['primerApellidoPersona'],$fila['segundoApellidoPersona'],$fila['fechaNacimientoPersona'],
                $fila['ocupacionPersona'],$fila['salarioPersona'],$fila['lugarTrabajoPersona'],
                $fila['estadoCivilPersona'],$fila['sexoPersona'],$fila['pensionado'],
                $fila['contrasennaCliente'],$fila['accionesCliente'],$fila['cargoCliente'],$fila['fechaAfiliacionCliente']);
            array_push($arrayCliente, $clente);

        }
        return $arrayCliente;
    }*/


}
