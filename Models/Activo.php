<<?php
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
    private $con;
    
     public function __construct() {
        $this->con=new Conexion();
        $this->fecha_modificacion= date("Y/m/d");
    }//ctor
    
     public function set($atributo, $contenido){
	$this->$atributo = $contenido;
    }//set
    public function get($atributo){
	return $this->$atributo;
    }//get
    
    public function create(){
        $fActual = date("Y/m/d");
        $sql = "INSERT INTO activo (id_usuario, codigo, numero_serie, nombre, descripcion, donado_por, ubicacion_departamento,
            valor_adquisicion, valor_actual, ruta_imagen, fecha_ingreso,fecha_modificacion)
                VALUES ('{$this->idUsuario}', '{$this->codigo}', '{$this->numeroSerie}', '{$this->nombre}','{$this->descripcion}',
                    '{$this->donadoPor}','{$this->ubicacionDepartamento}','{$this->valorAdquisicion}','{$this->valorAdquisicion}', 
                    '{$this->rutaImagen}', '{$fActual}', '{$this->fecha_modificacion}')";
        //print $sql;
        $this->con->consultaSimple($sql);
    }//create
    
    public function update(){
         $sql = "UPDATE activo set codigo = '{$this->numeroSerie}', nombre = '{$this->nombre}', descripcion = '{$this->descripcion}',
          donado_por = '{$this->donadoPor}', ubicacion_departamento = '{$this->ubicacionDepartamento}', 
          valor_adquisicion = '{$this->valorAdquisicion}', valor_actual = '{$this->valorActual}', ruta_imagen = '{$this->rutaImagen}',
          fecha_modificacion = '{$this->fecha_modificacion}' WHERE codigo = '$this->codigo'";
          $this->con->consultaSimple($sql);
    }//update
    
    public function delete(){
        $sql = "DELETE activo where codigo = '$this->codigo'";
        $this->con->consultaSimple($sql);
    }//delete
    
    public function getActivo(){
        $sql = "SELECT * FROM activo WHERE codigo = {$this->codigo}";
        $datos = $this->con->consultaRetorno($sql);
	//Envia un array
	$row = mysqli_fetch_assoc($datos);
	return $row;
    }//getActivo
    
    public function getActivos(){
        $sql = "SELECT * FROM activo";
        $datos = $this->con->consultaRetorno($sql);
        return $datos;
    }////getActivos
    
    public function generarCodigo(){
        //Obtiene las primeras 3 letras del departamento
        $cod = substr($this->ubicacionDepartamento,0,3);
        $num = 1;
        $codigo="";
        
        $sql = "Select codigo from activo where codigo like"."''$cod'%' order by codigo desc limit 1";
        $datos = $this->con->consultaRetorno($sql);
        $row = mysqli_fetch_array($datos);
        
        if (empty($row['codigo'])) {
            $codigo = $cod . $num;
        }
        else{
            $num = intval(substr($row['codigo'],3),10);
            $codigo = $cod . ($num+1);
        }
        return $codigo;
    }//generarCodigo
    
    public function calcularValorDepreciacion(){
        //Por mientras se va a manejar el mismo valor
        //que el de adquisicion
    }//calcularValorDepreciacion
}//class
?>
