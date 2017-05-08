<?php
namespace Controllers;
use Models\Producto as Producto;

class ProductoController {
    private $producto;
    
    function __construct() {
        $this->producto = new Producto();
    }//ctor
    
    public function index() {
        $datos = $this->producto->getProductos();
        return $datos;
    }//index
    
    public function agregar(){
        
    }//agregar
    
    public function editar($id){
        
    }//editar
    
    public function ver($id){
        
    }//ver
    
    public function eliminar($id){
        
    }//eliminar
    
}//class


