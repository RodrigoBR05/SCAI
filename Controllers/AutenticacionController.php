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
                    $auten = new \Controllers\AutenticacionController();
                    $verificarUser=$auten->login($_POST['usuario'],$_POST['password']);
                    if ($verificarUser) {
                        $_SESSION['admin']= $verificarUser;
                        header('Location: '.URL.'usuarios');
                    }
                }
            }
        }
        
        public function login($usuario,$clave){
            $datos = $this->autenticacion->login($usuario,$clave);            
            return $datos;            
        }

    }
?>
