<?php
class model_cliente{
   private $DB;
   private $socios;

   function __construct(){
   	$this->DB = conexion::getConnetion();
   	$this->socios = array();
   }


   function get(){
   	//$query = $this->DB->query("SELECT * FROM clientes");
      $query = $this->DB->query("SELECT c.cliente_id,c.nombre,c.apellido,c.edad,c.fecha_inscripcion,m.tipo,m.tarifa
     FROM clientes c inner join modalidad m
     on c.tipo_id=m.tipo_id");
      while ($fila = $query->fetch_assoc()) {
   		# code...
   		array_push($this->socios,$fila);
   	}
   	return $this->socios;
   }


   function add($data){
      $sql = "INSERT INTO clientes (tipo_id,nombre,apellido,edad,fecha_inscripcion) VALUES 
      (".$data['modalidad'].",'".$data['nombre']."','".$data['apellido']."','".$data['edad']."','".$data['fecha']."')";
      mysqli_query($this->DB,$sql) or die ('Error \n'.mysqli_error($this->DB));
   }


   function getId($_id){
$query = $this->DB->query("SELECT * FROM clientes where cliente_id=".$_id);
   while ($fila = $query->fetch_assoc()) {
      # code...
      $this->socios= $fila;
   }
   return $this->socios;
   }


   function delete($_id){
      $sql = "DELETE FROM clientes where cliente_id=".$_id;
      mysqli_query($this->DB,$sql) or die ('error \n'.mysqli_error($this->$DB));
   }


   function edit($data,$_id){
   $sql = "UPDATE clientes SET tipo_id='".$data['modalidad']."',
   nombre='".$data['nombre']."',
   apellido='".$data['apellido']."',
   edad='".$data['edad']."',
   fecha_inscripcion='".$data['fecha']."'
   WHERE cliente_id=".$_id;
   mysqli_query($this->DB,$sql) or die ('error \n'.mysqli_error($this->$DB));
   }


}
?>