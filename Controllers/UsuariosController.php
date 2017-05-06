<?php namespace Controllers;
    
    require_once '../Models/Usuario.php';
    
    use Models\Usuario as Usuario;

    class UsuariosController{
        
        private $usuario;

        public function __construct(){
            $this->usuario = new Usuario();
        }
        
        public function index(){
            //print_r($this->usuario->toList());
            //header('Location: Views/usuarios/index.php');
        }
        
        public function create(){
            $this->usuario->set("nombre", 'Rodrigo' );
            $this->usuario->set("apellidos", 'Brenes Ramírez');
            $this->usuario->set("email", 'rodri2017.bre05@gmail.com');
            $this->usuario->set("telefono", '88888888');
            $this->usuario->set("puesto", 'Administrador');
            $this->usuario->set("usuario", 'rodrigo2017');
             $this->usuario->set("clave", 'rodrigo');
            $this->usuario->set("tipo_usuario", 'Administrador general');
            $this->usuario->set("id_tipo_usuario", 1);
            $this->usuario->set("fecha_ingreso", 'NOW()');
            $this->usuario->set("fecha_modificacion", 'NOW()');
            $this->usuario->create();
        }
        
        
    }
    $usuarios = new UsuariosController();
    //$usuarios->index();
    $usuarios->create();
    
?>

