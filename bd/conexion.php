<?php
class conexion{
    public static function getConnetion(){
    	$conn = new mysqli("localhost","root","","gimnasio");
        $conn->query("SET NAMES 'utf8'");
        return $conn;
    }
}
?>