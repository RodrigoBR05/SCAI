<?php

namespace Models;

/**
 * Description of Activo
 *
 * @author melma
 */
class Activo {
    
    private $idUsuario;
    private $codigo;
    private $numeroSerie;
    private $nombre;
    private $descripcion;
    private $donadoPor;
    private $ubicacionDepartamento;
    private $valorAdquisicion;
    private $valorActual;
    private $rutaImagen;
    private $fecha_ingreso;
    private $fecha_modificacion;
    
     public function __construct() {
        $this->con=new Conexion();
    }//ctor
    
     public function set($atributo, $contenido){
	$this->$atributo = $contenido;
    }//set

    public function get($atributo){
	return $this->$atributo;
    }//get
    
    public function create(){
        
    }//create
    
    public function update(){
        
    }//update
    
    public function delete(){
        
    }//delete
    
    public function getActivo(){
        
    }//getActivo
    
    public function getActivos(){
        
    }////getActivos
    
    /*public function generarCodigo(){
        $cod = "ASI";
        $num = 100;
        $codigo="";
        $query = mysqli_query($this->conn, "Select carne from tb_asociado order by carne desc limit 1");
        $data = mysqli_fetch_array($query);
        
        if (empty($data['carne'])) {
            $codigo = $cod . $num;
        }
        else{
            $num = intval(substr($data['carne'],3),10);
            $codigo = $cod . ($num+1);
        }
        //mysqli_free_result($query);
        //mysqli_close($this->conn);
        return $codigo;
    }//generarCarne
    */


    
}//class

?>
