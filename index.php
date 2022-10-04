<?php




session_start();

//configuracio
require 'config.php';
require 'src/router.php';
require 'src/routes.php';
//enrutament
$controlador=getRoute($routes);

require 'src/controllers/'. $controlador.'.php';
//crida al controlador

