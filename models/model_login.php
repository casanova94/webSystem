<?php

class model_login{
   private $DB;
   private $usuarios;

function __construct(){
	$this->DB = conexion::getConnetion();
	$this->usuarios =  NULL;
}

function getUser($usuario,$password){
	$query = $this->DB->query("SELECT u.id,u.id_tipo,t.tipo,p.nombre FROM usuarios u inner join tipo_usuario t on u.id_tipo=t.id inner join personal p on u.id_personal=p.id where usuario='$usuario' and password='$password'");
   	while ($fila = $query->fetch_assoc()) {
   		# code...
   		$this->usuarios= $fila;
   	}
   	return $this->usuarios;
}


}

?>