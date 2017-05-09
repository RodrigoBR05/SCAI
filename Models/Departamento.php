<?php namespace Models;

class Departamento{
    private $id_departamento;
    private $id_usuario;
    private $codigo;
    private $nombre;
    private $descripcion;
    private $fecha_ingreso;
    private $fecha_modificacion;
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

    public function toList(){
        $sql = "SELECT t1.*, t2.nombre as nombre_usuario FROM departamento t1 INNER JOIN usuario t2 ON t1.id_usuario = t2.id_usuario";
        $datos = $this->con->consultaRetorno($sql);
        return $datos;
    }
    
    public function create(){
        $fActual = date("Y/m/d");
        $fModificacion = date("Y/m/d");        
        $codigoDepartamento = strtoupper(substr($this->nombre, 0, 3).date("is"));
        $sql = "INSERT INTO departamento (id_usuario,codigo,nombre,descripcion,fecha_ingreso,fecha_modificacion)
                VALUES ('{$this->id_usuario}', '{$codigoDepartamento}', '{$this->nombre}', '{$this->descripcion}','{$fActual}','{$fModificacion}')";
        //print $sql;
        $this->con->consultaSimple($sql);
    }
    
    public function delete(){
        $sql = "DELETE FROM departamento WHERE id_departamento = '{$this->id_departamento}'";
        print $sql;
        $this->con->consultaSimple($sql);
    }
    
    public function update(){
        $fModificacion = date("Y/m/d");
        $sql = "UPDATE departamento SET nombre = '{$this->nombre}', id_usuario = '{$this->id_usuario}', descripcion = '{$this->descripcion}',fecha_modificacion = '{$fModificacion}' "
        . "WHERE id_departamento = '{$this->id_departamento}'";
        $this->con->consultaSimple($sql);
    }

    public function read(){
        $sql = "SELECT t1.*, t2.nombre as nombre_usuario, t2.apellidos FROM departamento t1 INNER JOIN usuario t2 ON t1.id_usuario = t2.id_usuario "
                . "WHERE id_departamento = '{$this->id_departamento}'";
        $datos = $this->con->consultaRetorno($sql);
	//Envia un array
	$row = mysqli_fetch_assoc($datos);
	return $row;
    }  
    
}

?>
