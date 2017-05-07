<?php namespace Controllers;   

    require_once 'Models/Autenticacion.php';

    use Models\Autenticacion as Autenticacion;

    class AutenticacionController{
        
        private $autenticacion;
        
        public function __construct() {
            $this->autenticacion = new Autenticacion();
        }
        
        public function index(){
            header('Location: Views/usuarios/index.php');
        }

        public function login($usuario,$clave){
            $datos = $this->autenticacion->login($usuario,$clave);            
            return $datos;
        }
    }
?>
