<?php
require 'conexion.php';

$aut= "SELECT * FROM autos";
$resultadoAut = $mysqli->query($aut);
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
    <meta charset="iso-8859-1">
    <meta name="descripcion" content="Ejemplo html5">
    <meta charset="keywords" content="html5,css3,javaScript">
	<title>mostrar registros</title>


	<script src="modernizr.min.js"></script>

</head>

<body>
	<header>
		<h2>mostrar registros de la base de datos php</h2>
	</header>
	    <section>
		
		
		<FORM METHOD="POST">

		<table>
			<tr>
				<th>id auto</th>
				<th>marca</th>
				<th>modelo</th>
				<th>combustible</th>
				<th>color</th>
				<th>año</th>
				<th>precio</th>
				<th>selecionar</th>
			</tr>
			<?php

			while ($resultadoAutCon=$resultadoAut->fetch_array(MYSQLI_BOTH))
			 {
				echo '<tr>
				<td>'.$resultadoAuton['id'].'</td>
				<td>'.$resultadoAutCon['marca'].'</td>
				<td>'.$resultadoAutCon['modelo'].'</td>
				<td>'.$resultadoAutCon['combustible'].'</td>
				<td>'.$resultadoAutCon['color'].'</td>
				<td>'.$resultadoAutCon['fecha'].'</td>
				<td>'.$resultadoAutCon['precio'].'</td>
				<td><input type="checkbox" name="eliminar[]" values="'.$resultadoAutCon['id'].'"/>
				</tr>';
			}
			?>
		</table>
		<input type="submit" name="borrar" values="eliminar registros">
		<button>recargar</button>

		<?php
		if (isset($_post['borrar'])) 
		{
			if (empty($_post['eliminar'])) 
			 {
				echo '<h1>no se ha selecionado ningun registro.</h1>';
			}
			else
			{
				foreach ($_post['eliminar'] as  $id_borrar)
				{
				$borrarautos= $mysqli->query("delate from  autos where  id='$id_borrar'");	
				}
			}
		}
			
			?>
		</FORM>
	</section>
<a href="http://localhost/agencia-autos/frmformulario.html">ingresar Registro</a>
</body>
</html>
