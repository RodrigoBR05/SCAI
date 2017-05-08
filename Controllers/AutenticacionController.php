<?php namespace Controllers; 

    use Models\Autenticacion as Autenticacion;

    class AutenticacionController{
        
        private $autenticacion;
        
        public function __construct() {
            $this->autenticacion = new Autenticacion();
        }
        
        public function index(){
            if ($_POST) {                
                $usuario = (isset($_POST['usuario']) ? $_POST['usuario'] : '');
                $verificarUser=$this->login($_POST['usuario'],$_POST['password']);
                if($verificarUser){
                    if ($verificarUser['id_tipo_usuario'] == 1) {
                        header('Location: '.URL.'usuarios?admin='.$verificarUser['id_usuario']);
                    }
                    
                }
            }
        }
        
        private function login($usuario,$clave){
            $datos = $this->autenticacion->login($usuario,$clave);            
            return $datos;            
        }

    }
?>
