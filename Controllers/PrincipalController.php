<?php

namespace Controllers;

/**
 * Description of PrincipalController
 *
 * @author melma
 */
class PrincipalController {
    
    private $controller;
    private $usuario;
    private $login;


    public function __construct() {
        $this->login = True;
    }//ctor
    
    public function invoke() {

        if($this->login){
            header('Location: Views/Login.php');
            $this->login=FALSE;
        }
        
        else if (isset($_GET['activo'])) {
            require_once 'Controllers/ActivoController.php';
            $this->controller = new ActivosController();
            $this->controller->invoke();
            echo 'AQUIIIII';
        }//activo
        
        else if(isset($_GET['usuario'])){
            
        }//usuario
    }

//invoke

    public function login($usuario, $password) {
        
        require_once 'Controllers/AutenticacionController.php';        
        $this->controller = new AutenticacionController();
        $verificarUser = $this->controller->login($usuario, $password);
        if ($verificarUser) {
            $_SESSION['admin'] = $verificarUser;
            $this->controller->index();
        }
    }//login

}//class

?>
