<?php namespace Models;

class Usuario{
    private $id_usuario;
    private $nombre;
    private $apellidos;
    private $email;
    private $telefono;
    private $puesto;
    private $usuario;
    private $clave;
    private $tipo_usuario;
    private $id_tipo_usuario;
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
        $sql = "SELECT * FROM usuario";
        $datos = $this->con->consultaRetorno($sql);
        return $datos;
    }
    
    public function create(){
        $fActual = date("Y/m/d");
        $fModificacion = date("Y/m/d");
        $encriptacionClave = password_hash($this->clave, PASSWORD_DEFAULT, [15]);
        $sql = "INSERT INTO usuario (nombre,apellidos,email,telefono,puesto,usuario,clave,tipo_usuario,id_tipo_usuario,
                fecha_ingreso,fecha_modificacion)
                VALUES ('{$this->nombre}', '{$this->apellidos}', '{$this->email}', '{$this->telefono}','{$this->puesto}',
                    '{$this->usuario}','{$encriptacionClave}','{$this->tipo_usuario}','{$this->id_tipo_usuario}', '{$fActual}','{$fModificacion}')";
        //print $sql;
        $this->con->consultaSimple($sql);
    }
    
    public function delete(){
        $sql = "DELETE FROM usuario WHERE id_usuario = '{$this->id_usuario}'";
        $this->con->consultaSimple($sql);
    }
    
    public function update(){
        $sql = "UPDATE usuario SET nombre = '{$this->nombre}', apellidos = '{$this->apellidos}', email = '{$this->email}',"
        . "telefono = '{$this->telefono}',puesto = '{$this->puesto}',usuario = '{$this->usuario}',clave = '{$this->clave}',"
        . "tipo_usuario= '{$this->tipo_usuario}',id_tipo_usuario = '{$this->id_tipo_usuario}',fecha_modificacion = 'NOW()' "
        . "WHERE id_usuario = {$this->id_usuario}";
        $this->con->consultaSimple($sql);
    }

    public function read(){
        $sql = "SELECT * FROM usuario WHERE id_usuario = {$this->id_usuario}";
        $datos = $this->con->consultaRetorno($sql);
	//Envia un array
	$row = mysqli_fetch_assoc($datos);
	return $row;
    }  
    
}

?>
