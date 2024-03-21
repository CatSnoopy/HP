<?php
include_once "conexion.php";
$sentencia = $base_de_datos->query("SELECT * FROM plantas;");
?>
<!--Recordemos que podemos intercambiar HTML y PHP como queramos-->
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<style>
	table, th, td {
	    border: 1px solid black;
	}
	</style>
</head>
<body>
	<table>
		<thead>
			<tr>
				<th>nombre</th>
				<th>tipo</th>
				<th>temperatura</th>
				<th>iluminacion</th>
			</tr>
		</thead>
		<tbody>
			<?php while ($persona = $sentencia->fetch_assoc() ){ ?>
			<tr>
				<td><?php echo $persona["nombre"]?></td>
				<td><?php echo $persona["tipo"]?></td>
				<td><?php echo $persona["temperatura"]?></td>
				<td><?php echo $persona["iluminacion"]?></td>				
				<td><a href="<?php echo "PHP/editar.php?id=" .    $persona["id_plantas"]?>">Editar</a></td>
				<td><a href="<?php echo "PHP/eliminar.php?id=" .  $persona["id_plantas"]?>">Eliminar</a></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
	
	<br> 
	<a href="Iniciar_sesion.html">Atras</a>
	
</body>
</html>