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
    private $proveedor;
    private $cantidadMinima;
    private $cantidadActual;
    private $rutaImagen;
    private $fecha_ingreso;
    private $fecha_modificacion;
    
    public function __construct() {
     $this->con=new Conexion();
     $this->fecha_modificacion= date("Y/m/d");    
    }//constructor
      
    public function set($atributo, $contenido){
        $this->$atributo = $contenido;    
    }//set
    public function get($atributo){
	return $this->$atributo;
    }//get
    
    public function create() {
    $fActual = date("Y/m/d");
    $sql = "INSERT INTO producto (id_producto, id_usuario, nombre, descripcion, peso, 
            proveedor, cantidad_minima, cantidad_actual, ruta_imagen, fecha_ingreso, fecha_modificacion)
            VALUES ('{$this->idProducto}','{$this->idUsuario}','{$this->nombre}','{$this->descripcion}',
            '{$this->peso}', '{$this->proveedor}','{$this->cantidadMinima}','{$this->cantidadActual}',
            '{$this->cantidadMinima}', {$this->cantidadActual},'{$this->rutaImagen}',
            '{$this->fecha_ingreso}', '{$this->fecha_modificacion}')";
            //print $sql;
             $this->con->consultaSimple($sql);
           
    }//create
    public function update(){
    $sql = "UPDATE producto set id_producto = '{$this->idProducto}', id_usuario = '{$this->idUsuario}',
    nombre = '{$this->nombre}', descripcion = '{$this->descripcion}', peso = '{$this->peso}',
    proveedor = '{$this->proveedor}', cantidad_minima = '{$this->cantidadMinima}', cantidad_actual = '{$this->cantidadActual}',
    ruta_imagen = '{$this->rutaImagen}', fecha_ingreso = '{$this->fecha_ingreso}', fecha_modificacion = '{$this->fecha_modificacion}'";
    $this->con->consultaSimple($sql);
    }//update
    
    public function delete(){
        $sql = "DELETE producto where id_producto = '$this->idProducto'";
        $this->con->consultaSimple($sql);
    }//delete
    
    public function getProducto(){
        $sql = "SELECT * FROM producto WHERE id_prodiucto = {$this->idProducto}";
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
