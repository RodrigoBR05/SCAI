<?php
	define('DS', DIRECTORY_SEPARATOR);
	define('ROOT', realpath(dirname(__FILE__)).DS);
	//define('URL', "http://localhost/SCAI/");
        define('URL', "http://localhost/SCAI/");
        //define('URL', "http://localhost/SCAI/");
	require_once "Config/Autoload.php";
	Config\Autoload::run();
	Config\Enrutador::run(new Config\Request());
?>
