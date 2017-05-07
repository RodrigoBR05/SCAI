<?php

namespace Controllers;

/**
 * Description of ActivosController
 *
 * @author melma
 */
class ActivosController {

    public function __construct() {
        
    }//ctor

    public function index() {
        header('Location: Views/activos/index.php');
    }//index
    
    public function invoke(){
        if (isset($_GET['activo'])) {
            $this->index();
        }
    }//invoke
}//class

?>