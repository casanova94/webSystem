<?php
require_once 'models/model_cliente.php';
require_once 'models/model_modalidad.php';
require_once 'models/model_pagos.php';
require_once 'models/model_control.php';



class controlesController{
private $model_cliente;
private $model_modalidad;
private $model_pagos;
private $model_control;

function __construct(){
	$this->model_cliente = new model_cliente();
	$this->model_modalidad = new model_modalidad();
	$this->model_pagos = new model_pagos();
	$this->model_control = new model_control();
}



function index(){
	$title = "Controles";
	$query = $this->model_control->get();
	require_once 'views/header.php';
	require_once 'views/control/index.php';
	require_once 'views/footer.php';
	
}


function control(){
$data = NULL;
if(isset($_REQUEST['_id'])){
    $data = $this->model_control->getId($_REQUEST['_id']);
	}
    $title = "Controles";
    $query = $this->model_cliente->get();
    require_once 'views/header.php';
	require_once 'views/control/control_form.php';
	require_once 'views/footer.php';

}



function guardar(){
      $data['cliente'] = $_REQUEST['sel_cliente'];
      $data['peso'] = $_REQUEST['peso'];
      $data['medida'] = $_REQUEST['medida'];
      $data['fecha'] = $_REQUEST['fecha'];
      
      $_id = $_REQUEST['txt_id'];
      $_id > 0 ? 
        $this->model_control->edit($data,$_id):
        $this->model_control->add($data);

      header('Location:index.php?c=controles&a=index');

 }




 function delete(){
 	$_id = $_REQUEST['_id'];
 	$this->model_control->delete($_id);
 	 header('Location:index.php?c=controles&a=index');
 }


}



?>