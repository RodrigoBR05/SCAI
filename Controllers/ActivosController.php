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
    
    
    public function create(){
        if($_POST){
            $this->activo->set("idUsuario", 3); //CAMBIAR****
            $this->activo->set("codigo", "COM1"); //CAMBIAR****
            $this->activo->set("numeroSerie", $_POST['numSerie']);
            $this->activo->set("nombre", $_POST['nombre']);
            $this->activo->set("descripcion", $_POST['descripcion']);
            $this->activo->set("donadoPor", $_POST['donadoPor']);
            $this->activo->set("ubicacionDepartamento", $_POST['departamento']);
            $this->activo->set("valorAdquisicion", $_POST['valorAdquisicion']);
            $this->activo->set("valorActual", $_POST['valorActual']);
            //Para guardar la imagen
            $permitidos = array("image/jpeg", "image/png", "image/gif", "image/jpg");
            $limite = 700;
            $ruta ="";
           
            if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite * 1024) {
                echo '********************************************************************AQUIII';
                $nombre = date('is') . $_FILES['imagen']['name'];
                $ruta = "Views" . "/" . "activos" . "/" . "imagenes" ."/" . $nombre;
                move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);
                $this->activo->set("rutaImagen", $ruta); 
                echo '************************************************************************'. $nombre;
            }
            $this->activo->create();
        }//POST
        
    }//create
    
    public function editar($id){
        
    }//editar
    
    public function ver($id){
        
    }//ver
    
    public function eliminar($id){
        
    }//eliminar
    
    
}//class

    //$activos = new ActivosController();
?>