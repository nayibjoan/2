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
			while ($resultadoAutcon=$resultadoAut->fetch_array(mysqli_both))
			 {
				echo '<tr>
				<td>'.$resultadoAutcon['id'].'</td>
				<td>'.$resultadoAutcon['marca'].'</td>
				<td>'.$resultadoAutcon['modelo'].'</td>
				<td>'.$resultadoAutcon['combustible'].'</td>
				<td>'.$resultadoAutcon['color'].'</td>
				<td>'.$resultadoAutcon['fecha'].'</td>
				<td>'.$resultadoAutcon['precio'].'</td>
				<td><input type="checkbox" name="eliminar[]" values="'.$resultadoAutcon['id'].'"/>
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
<a href="http://localhost/agencia-autos/frmformulario.html">ingresar registro</a>
</body>
</html>
