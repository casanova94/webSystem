<?php
require_once 'models/model_cliente.php';
require_once 'models/model_modalidad.php';



class clientesController{
private $model_cliente;
private $model_modalidad;

function __construct(){
	$this->model_cliente = new model_cliente();
	$this->model_modalidad = new model_modalidad();
}



function index(){
	$title = "Socios";
	$query = $this->model_cliente->get();
	require_once 'views/header.php';
	require_once 'views/clientes/index.php';
	require_once 'views/footer.php';
	
}


function cliente(){
	$data = Null;
	if(isset($_REQUEST['_id'])){
    $data = $this->model_cliente->getId($_REQUEST['_id']);
	}
	$title = "Socios";
	$query = $this->model_modalidad->get();
	require_once 'views/header.php';
	require_once 'views/clientes/clientes_form.php';
	require_once 'views/footer.php';

}


function guardar(){
      $data['nombre'] = $_REQUEST['nombre'];
      $data['apellido'] = $_REQUEST['apellido'];
      $data['edad'] = $_REQUEST['edad'];
      $data['fecha'] = $_REQUEST['fecha'];
      $data['modalidad'] = $_REQUEST['sel_modalidad'];
      
      $_id = $_REQUEST['txt_id'];
      $_id > 0 ? 
        $this->model_cliente->edit($data,$_id):
        $this->model_cliente->add($data);

      header('Location:index.php');

 }




 function delete(){
 	$_id = $_REQUEST['_id'];
 	$this->model_cliente->delete($_id);
 	header('Location:index.php');
 }


}



?>