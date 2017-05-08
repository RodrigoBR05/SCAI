<?php

namespace Controllers;
use Models\Activo as Activo;

class ActivosController {
    private $activo;
    
    
    function __construct() {
        $this->activo = new Activo();
    }//ctor
    
    public function index() {
        $datos = $this->activo->getActivos();
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

    //$activos = new ActivosController();
?>
