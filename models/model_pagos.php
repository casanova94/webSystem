<?php
class model_pagos{
   private $DB;
   private $pagos;

   function __construct(){
   	$this->DB = conexion::getConnetion();
   	$this->pagos = array();
   }

    function getPagos(){
      $query = $this->DB->query("SELECT c.cliente_id,c.nombre,c.apellido,p.id_pago,p.monto,p.estado,p.fecha_pago,m.tarifa
     FROM clientes c inner join pagos p
     on c.cliente_id=p.id_cliente
     inner join modalidad m
     on m.tipo_id=c.tipo_id");
      while ($fila = $query->fetch_assoc()) {
   		# code...
   		array_push($this->pagos,$fila);
   	}
   	return $this->pagos;
   }



   function add($data){
      $sql = "INSERT INTO pagos (id_cliente,monto,estado,fecha_pago) VALUES 
      (".$data['cliente'].",'".$data['monto']."','".$data['estado']."','".$data['fecha']."')";
      mysqli_query($this->DB,$sql) or die ('Error \n'.mysqli_error($this->DB));
   }


   function delete($_id){
   	$sql = "DELETE FROM pagos WHERE id_pago=".$_id;
   	 mysqli_query($this->DB,$sql) or die ('Error \n'.mysqli_error($this->DB));

   }



   function getId($_id){
$query = $this->DB->query("SELECT * FROM pagos where id_pago=".$_id);
   while ($fila = $query->fetch_assoc()) {
      # code...
      $this->pagos= $fila;
   }
   return $this->pagos;
   }


   function edit($data,$_id){
   $sql = "UPDATE pagos SET id_cliente='".$data['cliente']."',
   monto='".$data['monto']."',
   estado='".$data['estado']."',
   fecha_pago='".$data['fecha']."'
   WHERE id_pago=".$_id;
   mysqli_query($this->DB,$sql) or die ('error \n'.mysqli_error($this->$DB));
   }

function getTotalIncome($initialDate,$lastDay){
$query = $this->DB->query("SELECT sum(monto) monto FROM pagos where estado='Pagado' and fecha_pago between '".$initialDate."' and '".$lastDay."'");
   while ($fila = $query->fetch_assoc()) {
      # code...
      $this->pagos= $fila;
   }
   return $this->pagos;

}



}

?>