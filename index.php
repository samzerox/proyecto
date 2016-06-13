<?php 

	define('DS', DIRECTORY_SEPARATOR);
	define('ROOT', realpath(dirname(__FILE__)) . DS);
	define('URL', "http://localhost/proyecto/");

	require_once "Config/Autoload.php";
	//require_once "Config/Request.php";
	//require_once "Config/Enrutador.php";

	Config\Autoload::run();
	require_once "Views/template.php";
	Config\Enrutador::run(new Config\Request());


	

 ?>