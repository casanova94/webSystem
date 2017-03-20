<?php
require_once "bd/conexion.php";
//require_once "controllers/clientesController.php";
//$controller = new clientesController();


//if(!empty($_REQUEST['m'])){
//	$metodo = $_REQUEST['m'];
  // if(method_exists($controller,$metodo)){
   	//$controller->$metodo();
   //}else{
   	//$controller->index();
   //}
//}else{
//	$controller->index();
//}

$controller = 'login';
if(!isset($_REQUEST['c'])){
	require_once "controllers/".$controller."Controller.php";
    $controller = ucwords($controller)."Controller";
    $controller = new $controller;
    $controller->index();
}else{
$controller = strtolower($_REQUEST['c']);
$accion = isset($_REQUEST['a']) ? $_REQUEST['a']:'index';
//instanciamos el controlador obtenido
require_once "controllers/".$controller."Controller.php";
$controller = ucwords($controller)."Controller";
$controller = new $controller;

//llamamos la acción
call_user_func(array($controller,$accion)); 
}



?>