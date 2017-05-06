<?php namespace Models;
	
class Conexion{
    private $datos = array(
	//"host" => "163.178.107.130",
	//"user" => "adm",
	//"pass" => "saucr.092",
	"db" => "scai",
        //Base local 
        "host" => "localhost",
        "user" => "root",
	"pass" => "melm0360"
    );
    
    //Tipos de usuario
    //Administrador general = 1
    //Administrador de activos = 2
    //Administrador de inventario = 3

    private $con;

    public function __construct(){
	// \ para que identifica la clase global mysqli cuando utilizamos namespace
	$this->con = new \mysqli($this->datos['host'],$this->datos['user'], $this->datos['pass'],$this->datos['db']);
        //Acentos
        \mysqli_set_charset($this->con, "utf8");
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
