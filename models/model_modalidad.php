<?php
class model_modalidad{
   private $DB;
   private $modalidades;

   function __construct(){
   	$this->DB = conexion::getConnetion();
   	$this->modalidades = array();
   }


   function get(){
   	$query = $this->DB->query("SELECT * FROM modalidad");
   	while ($fila = $query->fetch_assoc()) {
   		# code...
   		$this->modalidades[] = $fila;
   	}
   	return $this->modalidades;
   }
 
function getId($_id){
$query = $this->DB->query("SELECT * FROM modalidad where tipo_id=".$_id);
while ($fila = $query->fetch_assoc()) {
         # code...
         $this->modalidades = $fila;
      }
      return $this->modalidades;
}

   function add($data){
      $sql = "INSERT INTO modalidad (tipo,tarifa) VALUES 
      ('".$data['tipo']."','".$data['tarifa']."')";
      mysqli_query($this->DB,$sql) or die ('Error \n'.mysqli_error($this->DB));
   }


   function edit($data,$_id){
      $sql = "UPDATE modalidad 
      SET tipo = '".$data['tipo']."',
      tarifa = '".$data['tarifa']."'
      WHERE tipo_id=".$_id;
      mysqli_query($this->DB,$sql) or die ('error \n'.mysqli_error($this->$DB));
   }


   function getName($id){
   $sql = "SELECT tipo from modalidad where tipo_id=".$id;
   $query = $this->DB->query($sql);
   while ($fila = $query->fetch_assoc()) {
         # code...
         $this->modalidades = $fila;
      }
  return $this->modalidades;
   }

function getTarifa($cliente_id){
   $tarifa = array();
$sql = "SELECT m.tarifa FROM clientes c inner join modalidad m on c.tipo_id=m.tipo_id where c.cliente_id=".$cliente_id;
$query = $this->DB->query($sql);
 while ($fila = $query->fetch_assoc()) {
         # code...
         $tarifa = $fila;
      }
      return $tarifa;
}

function delete($_id){
   $sql = "DELETE FROM modalidad WHERE tipo_id=".$_id;
       mysqli_query($this->DB,$sql) or die ('Error \n'.mysqli_error($this->DB));
}

}
?>