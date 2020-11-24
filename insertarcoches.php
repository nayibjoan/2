<?php
     require 'conexion.php';

     $marca=$_POST['marca'];
     $modelo=$_POST['modelo'];
     $combustible=$_POST['combustible'];
     $color=$_POST['color'];
     $fecha=$_POST['fecha'];
     $precio=$_POST['precio'];

$sql ="NSERT INTO autos (marca,modelo,combustible,color,fecha,precio) VAlUES ('$marca','$modelo','$combustible','$color','$fecha','$precio')";

$resultado = $mysqli->query($sql);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <meta charset="iso-8859-1">
    <meta name="descripcion" content="Ejemplo html5">
    <meta charset="keywords" content="html5,css3,javaScript">
	<title>formulario de altas</title>

	<script src="modernizr.min.js"></script>
</head>

<body>
		<?php 
	echo "ha insertado los siguientes datos:";
	echo "<br><br>";
	echo "marca:", ($_POST['marca']);

	echo "<br>";
	echo "modelo:", ($_POST['modelo']); 

	echo "<br>";
	echo "combustible:", ($_POST['combustible']); 

	echo "<br>";
	echo "color:", ($_POST['color']); 

	echo "<br>";
	echo "fecha:", ($_POST['fecha']); 

	echo "<br>";
	echo "precio:", ($_POST['precio']); 
	echo "<br><br>";	
	 ?>
	<a href="http://localhost/agencia-autos/consulta.php">consulta
	</a>


</body>
</html>
