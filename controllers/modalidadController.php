<?php
require_once 'models/model_modalidad.php';

class modalidadController{
private $model_modalidad;

function __construct(){
	$this->model_modalidad =  new model_modalidad();
}


function index(){
	$title = "Modalidad";
	$query = $this->model_modalidad->get();
	require_once 'views/header.php';
	require_once 'views/modalidad/index.php';
	require_once 'views/footer.php';

}


function modalidad(){
	$data = NULL;
    if(isset($_REQUEST['_id'])){
    $data = $this->model_modalidad->getId($_REQUEST['_id']);
	}
	$title = "Modalidad";
    require_once 'views/header.php';
	require_once 'views/modalidad/modalidad_form.php';
	require_once 'views/footer.php';
}

function guardar(){
      $data['tipo'] = $_REQUEST['tipo'];
      $data['tarifa'] = $_REQUEST['tarifa'];
      $_id = $_REQUEST['txt_id'];
      $_id > 0 ? 
        $this->model_modalidad->edit($data,$_id):
        $this->model_modalidad->add($data);

      header('Location:index.php?c=modalidad&a=index');

 }


function delete(){
	 $_id = $_REQUEST['_id'];
	 $this->model_modalidad->delete($_id);
 	 header('Location:index.php?c=modalidad&a=index');
}

}


?>