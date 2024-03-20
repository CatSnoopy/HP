<?php
include_once "conexion.php";
$sentencia = $base_de_datos->query("SELECT * FROM persona;");
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
				<th>usuario</th>
				<th>correo</th>
				<th>contraseña</th>
			</tr>
		</thead>
		<tbody>
			<?php while ($persona = $sentencia->fetch_assoc() ){ ?>
			<tr>
				<td><?php echo $persona["nombre"]?></td>
				<td><?php echo $persona["usuario"]?></td>
				<td><?php echo $persona["correo"]?></td>
				<td><?php echo $persona["contraseña"]?></td>				
				<td><a href="<?php echo "phpadicionales/editar.php?id=" .    $persona["id"]?>">Editar</a></td>
				<td><a href="<?php echo "phpadicionales/eliminar.php?id=" .  $persona["id"]?>">Eliminar</a></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
	
	<br> 
	<a href="../paginaprincipal.php">Atras</a>
	
</body>
</html>