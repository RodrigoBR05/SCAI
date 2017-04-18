<?php namespace Models;

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
	
class Conexion{
    private $datos = array(
	"host" => "localhost",
	"user" => "root",
	"pass" => "",
	"db" => "SCAIPROY"
    );

    private $con;

    public function __construct(){
	// \ para que identifica la clase global mysqli cuando utilizamos namespace
	$this->con = new \mysqli($this->datos['host'],$this->datos['user'], $this->datos['pass'],$this->datos['db']);
    }
    
    public function consultaSimple($sql){
	$this->con->query($sql);
    } 

    public function consultaRetorno($sql){
    	$datos = $this->con->query($sql);
	return $datos;
    }
}
?>