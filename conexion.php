<?php
$mysqli=new mysqli('localhost','root','','agencia');
if($mysqli->connect_error){
	die('error de conexion' .$mysqli->connect_error);

}
?>