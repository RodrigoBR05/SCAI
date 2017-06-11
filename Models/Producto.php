<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Models;

/**
 * Description of Producto
 *
 * @author ROCIO
 */
class Producto {
    //put your code here
    private $idProducto;
    private $idUsuario;
    private $nombre;
    private $descripcion;
    private $peso;
    private $tipoPeso;
    private $proveedor;
    private $cantidadMinima;
    private $cantidadActual;
    private $rutaImagen;
    private $fechaIngreso;
    private $fechaModificacion;
    
    public function __construct() {
     $this->con=new Conexion();
     $this->fechaModificacion= date("Y/m/d"); 
     $this->fechaIngreso = date("Y/m/d");
    }//constructor
      
    public function set($atributo, $contenido){
        $this->$atributo = $contenido;    
    }//set
    public function get($atributo){
	return $this->$atributo;
    }//get
    
    public function create() {
    $fActual = date("Y/m/d");
    $sql = "INSERT INTO producto (id_usuario, nombre, descripcion, peso, tipo_peso, 
            proveedor, cantidad_minima, cantidad_actual, ruta_imagen, fecha_ingreso, fecha_modificacion)
            VALUES ('{$this->idUsuario}','{$this->nombre}','{$this->descripcion}',
            '{$this->peso}','{$this->tipoPeso}', '{$this->proveedor}','{$this->cantidadMinima}','{$this->cantidadActual}',
            '{$this->rutaImagen}','{$this->fechaIngreso}', '{$this->fechaModificacion}')";
              //print $sql;
             $this->con->consultaSimple($sql);
           
    }//create
    public function update(){
        $fActual = date("Y/m/d");    
        $sql = "UPDATE producto set 
        nombre = '{$this->nombre}', descripcion = '{$this->descripcion}', peso = '{$this->peso}', tipo_peso= '{$this->tipoPeso}',
        proveedor = '{$this->proveedor}', cantidad_minima = '{$this->cantidadMinima}', cantidad_actual = '{$this->cantidadActual}',
        ruta_imagen = '{$this->rutaImagen}', fecha_modificacion = '{$this->fecha_modificacion}' 
        WHERE id_producto = '{$this->idProducto}'";
        $this->con->consultaSimple($sql);
    }//update
    
    public function delete(){
        $sql = "DELETE FROM producto where id_producto = '$this->idProducto'";
        $this->con->consultaSimple($sql);
    }//delete
    
    public function getProducto(){
        $sql = "SELECT t1.*, t2.nombre as nombre_usuario, t2.apellidos FROM producto t1 "
                . "INNER JOIN usuario t2 ON t1.id_usuario = t2.id_usuario WHERE id_producto = '{$this->idProducto}'";
        $datos = $this->con->consultaRetorno($sql);
	//Envia un array
	$row = mysqli_fetch_assoc($datos);
	return $row;
    }//getProducto
    
    public function getProductos(){
        $sql = "SELECT * FROM producto";
        $datos = $this->con->consultaRetorno($sql);
        return $datos;
    }////getProductos
}
