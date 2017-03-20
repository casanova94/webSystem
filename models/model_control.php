<?php
class model_control{
   private $DB;
   private $controles;

   function __construct(){
   	$this->DB = conexion::getConnetion();
   	$this->controles = array();
   }

    function get(){
      $query = $this->DB->query("SELECT c.cliente_id,c.nombre,c.apellido,cs.peso,cs.medida_cintura,cs.fecha_control,cs.control_id
     FROM clientes c inner join control cs
     on cs.cliente_id=c.cliente_id");
      while ($fila = $query->fetch_assoc()) {
   		# code...
   		array_push($this->controles,$fila);
   	}
   	return $this->controles;
   }



   function add($data){
      $sql = "INSERT INTO control (cliente_id,peso,medida_cintura,fecha_control) VALUES 
      (".$data['cliente'].",'".$data['peso']."','".$data['medida']."','".$data['fecha']."')";
      mysqli_query($this->DB,$sql) or die ('Error \n'.mysqli_error($this->DB));
   }


   function delete($_id){
   	$sql = "DELETE FROM control WHERE control_id=".$_id;
   	 mysqli_query($this->DB,$sql) or die ('Error \n'.mysqli_error($this->DB));

   }



   function getId($_id){
$query = $this->DB->query("SELECT * FROM control where control_id=".$_id);
   while ($fila = $query->fetch_assoc()) {
      # code...
      $this->controles= $fila;
   }
   return $this->controles;
   }


   function edit($data,$_id){
   $sql = "UPDATE control SET cliente_id='".$data['cliente']."',
   peso='".$data['peso']."',
   medida_cintura='".$data['medida']."',
   fecha_control='".$data['fecha']."'
   WHERE control_id=".$_id;
   mysqli_query($this->DB,$sql) or die ('error \n'.mysqli_error($this->$DB));
   }




}

?>