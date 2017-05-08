<?php namespace Controllers;
    use Models\Usuario as Usuario;        
    
    /* Esto me sirve para el agregar usuario
    $id_usuario = $_POST['id_usuario']; 
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos']; 
    $email = $_POST['email'];
    $telefono = $_POST['telefono']; 
    $puesto = $_POST['puesto'];
    $usuario = $_POST['usuario']; 
    $clave = $_POST['clave'];
    $tipo_usuario = $_POST['tipo_usuario']; 
    $id_tipo_usuario = $_POST['id_tipo_usuario'];
    $fecha_ingreso = $_POST['fecha_ingreso']; 
    $fecha_modificacion = $_POST['fecha_modificacion'];
     * */
     

    class UsuariosController{
        
        private $usuario;

        public function __construct(){
            $this->usuario = new Usuario();
        }
        
        public function index(){
            $datos = $this->usuario->toList();
            return $datos;            
        }
        
        public function create(){
            $this->usuario->set("nombre", 'Rodrigo' );
            $this->usuario->set("apellidos", 'Brenes Ramírez');
            $this->usuario->set("email", 'rodri2018.bre05@gmail.com');
            $this->usuario->set("telefono", '88888888');
            $this->usuario->set("puesto", 'Administrador');
            $this->usuario->set("usuario", 'rodrigo2018');
             $this->usuario->set("clave", 'rodrigo');
            $this->usuario->set("tipo_usuario", 'Administrador general');
            $this->usuario->set("id_tipo_usuario", 2);
            $this->usuario->set("fecha_ingreso", 'NOW()');
            $this->usuario->set("fecha_modificacion", 'NOW()');
            $this->usuario->create();
        }
        
        public function delete($id){
            $this->usuario->set("id_usuario",$id);
            $this->usuario->delete();
            header('Location:'.URL.'usuarios');
        }
        
        
    }
    $usuarios = new UsuariosController();    
?>

