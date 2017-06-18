<?php namespace Controllers; 

    use Models\Autenticacion as Autenticacion;

    class AutenticacionController{
        
        private $autenticacion;
        public static $idUsuario;
        
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
                        AutenticacionController::$idUsuario = $verificarUser['id_usuario'];
                    }
                    
                }
            }//POST
        }//index
        
        private function login($usuario,$clave){
            $datos = $this->autenticacion->login($usuario,$clave);            
            return $datos;            
        }
        
        public function recuperarClave(){
            if ($_POST) {                
                $usuario = (isset($_POST['usuario']) ? $_POST['usuario'] : '');
                $verificarUser=$this->login($_POST['usuario'],$_POST['password']);
                if($verificarUser){
                    if ($verificarUser['id_tipo_usuario'] == 1) {
                        header('Location: '.URL.'usuarios?admin='.$verificarUser['id_usuario']);
                        AutenticacionController::$idUsuario = $verificarUser['id_usuario'];
                    }
                    
                }
            }
        }//index
        
    public function creditos() {
        //debe existir solo para q cargue la vista
    }
    
    public function logout() {
        header('Location: '.URL.'autenticacion');
    }

    }
?>
