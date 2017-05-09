<?php
namespace Controllers;
use Models\Producto as Producto;

class ProductosController {
    private $producto;
    
    function __construct() {
        $this->producto = new Producto();
    }//ctor
    
    public function index() {
        $datos = $this->producto->getProductos();
        return $datos;
    }//index
    
    public function create(){
        if($_POST){
            $this->producto->set("idUsuario", 3); //CAMBIAR****
            $this->producto->set("nombre", $_POST['nombre']);
            $this->producto->set("descripcion", $_POST['descripcion']);
            $this->producto->set("peso", $_POST['peso']);
            $this->producto->set("proveedor", $_POST['proveedor']);
            $this->producto->set("cantidadMinima", $_POST['cantidadMinima']);
            $this->producto->set("cantidadActual", $_POST['cantidadActual']);
            //Para guardar la imagen
            $permitidos = array("image/jpeg", "image/png", "image/gif", "image/jpg");
            $limite = 700;
            $ruta ="";
           
            if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite * 1024) {
                echo '********************************************************************AQUIII';
                $nombre = date('is') . $_FILES['imagen']['name'];
                $ruta = "Views" . "/" . "productos" . "/" . "imagenes" ."/" . $nombre;
                move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);
                $this->producto->set("rutaImagen", $ruta); 
                echo '************************************************************************'. $nombre;
            }
            $this->producto->create();
        }//POST
        
    }//create
    
    //public function agregar(){
        
    //}//agregar
    
    public function update($id){
    if (!$_POST) {
            $this->producto->set("idProducto", $id);
            $datos = $this->producto->getProducto();
            return $datos;
        }
        else {
            $this->producto->set("idProducto", $id);
            $this->producto->set("idUsuario", 3); //CAMBIAR****
            $this->producto->set("nombre", $_POST['nombre']);
            $this->producto->set("descripcion", $_POST['descripcion']);
            $this->producto->set("peso", $_POST['peso']);
            $this->producto->set("proveedor", $_POST['proveedor']);
            $this->producto->set("cantidadMinima", $_POST['cantidadMinima']);
            $this->producto->set("cantidadActual", $_POST['cantidadActual']);
           
            $this->producto->update();
        }    
        
    }//update
    
    public function read($id){
        $this->producto->set("idProducto", $id);
        $datos = $this->producto->getProducto();
        return $datos;
    }//ver
    
    public function delete($id){
        $this->producto->set("idProducto", $id);
        $this->producto->delete();
        header('Location:' . URL . 'productos');
    }//eliminar
    
}//class


