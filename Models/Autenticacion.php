<?php namespace Models;

 require_once 'Conexion.php';

class Autenticacion{
    private $con;

    public function __construct() {
        $this->con=new Conexion();
    }
    
    public function set($atributo, $contenido){
	$this->$atributo = $contenido;
    }

    public function get($atributo){
	return $this->$atributo;
    }
    
    public function login($usuario,$clave){
        $sql = "SELECT * FROM usuario WHERE usuario = '{$usuario}' AND clave = '{$clave}'";
        $datos = $this->con->consultaRetorno($sql);
        return $datos;
    }       
}
?>


