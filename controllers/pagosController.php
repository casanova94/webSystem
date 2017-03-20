<?php
require_once 'models/model_cliente.php';
require_once 'models/model_modalidad.php';
require_once 'models/model_pagos.php';



class pagosController{
private $model_cliente;
private $model_modalidad;
private $model_pagos;

function __construct(){
	$this->model_cliente = new model_cliente();
	$this->model_modalidad = new model_modalidad();
	$this->model_pagos = new model_pagos();
}



function index(){
	$title = "Socios";
	$query = $this->model_pagos->getPagos();
	require_once 'views/header.php';
	require_once 'views/pagos/index.php';
	require_once 'views/footer.php';
	
}


function pago(){
	$data = NULL;
    if(isset($_REQUEST['_id'])){
    $data = $this->model_pagos->getId($_REQUEST['_id']);
	}
	$title = "Pagos";
    $query = $this->model_cliente->get();
    require_once 'views/header.php';
	require_once 'views/pagos/pagos_form.php';
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
      $data['cliente'] = $_REQUEST['sel_cliente'];
      $data['monto'] = $_REQUEST['monto'];
      $data['estado'] = $_REQUEST['sel_estado'];
      $data['fecha'] = $_REQUEST['fecha'];
      
      $_id = $_REQUEST['txt_id'];
      $_id > 0 ? 
        $this->model_pagos->edit($data,$_id):
        $this->model_pagos->add($data);

      header('Location:index.php?c=pagos&a=index');

 }




 function delete(){
 	$_id = $_REQUEST['_id'];
 	$this->model_pagos->delete($_id);
 	 header('Location:index.php?c=pagos&a=index');
 }


}



?>