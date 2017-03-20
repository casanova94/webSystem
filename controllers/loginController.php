<?php
require_once 'models/model_login.php';

class loginController{
	private $model_login;

	function __construct(){
		$this->model_login = new model_login();
	}

function index(){
	session_start();
   if(isset($_SESSION['id_usuario'])){
   header('Location:index.php?c=clientes&a=index');
   }
	$error =  NULL;
	require_once 'views/login/login_form.php';
}

function loginform(){
	session_start();
   if(isset($_SESSION['id_usuario'])){
   header('Location:index.php?c=clientes&a=index');
   }
	$error =  true;
	require_once 'views/login/login_form.php';
}

function login(){

session_start();
	$data = NULL;
	$query = NULL;
if(!empty($_REQUEST)){
    $data['usuario'] = $_REQUEST['usuario'];
    $data['password'] = $_REQUEST['password'];
    $sha1_password = sha1($data['password']);
    $query = $this->model_login->getUser($data['usuario'],$sha1_password);
if(isset($query)){
	$_SESSION['id_usuario'] = $query['id'];
	$_SESSION['tipo_usuario'] = $query['id_tipo'];
	$_SESSION['rol'] = $query['tipo'];
	$_SESSION['nombre'] = $query['nombre'];
	 header('Location:index.php?c=clientes&a=index');
}else{
	 header('Location:index.php?c=login&a=loginform');
}
}

}


function logout(){
	session_start();
	session_destroy();
	header('Location:index.php?c=login&a=index');
}

}
?>