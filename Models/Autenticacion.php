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
        $sql = "SELECT * FROM usuario WHERE usuario = '{$usuario}'";
        $datos = $this->con->consultaRetorno($sql);
        $row = mysqli_fetch_array($datos);
        $claveUsuario = $row['clave'];
        if(password_verify($clave, $claveUsuario)){
            return $row;
        }
        return NULL;
    }       
}
?>


