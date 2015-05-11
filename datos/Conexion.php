<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Conexion {
    //put your code here
    //atributos
    public $server;
    public $user;
    public $password;
    public $dbName;
    public $connection;
    

    public function Conexion() {
        $this->server = "163.178.107.130";
        $this->user = "adm";
        $this->password = "saucr.092";
        $this->dbName = "bd_vest_personal_tours";
        
        /*$this->server = "127.0.0.1";
        $this->user = "root";
        $this->password = "";
        $this->dbName = "bd_vest_personal_tours";*/
    }
    
     //connect to the database
    public function conectar() {
        $this->connection = mysqli_connect($this->server, $this->user, $this->password, $this->dbName);
        return $this->connection;
    }

    //close the connection
    public function cerrarConexion() {
        mysqli_close($this->connection);
    }
}
