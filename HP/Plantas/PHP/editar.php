<?php
  if(!isset($_GET["nombre"])) exit();
  
  $id = $_GET["nombre"];
  include_once "../conexion.php";
  $sentencia = $base_de_datos->query("SELECT * FROM personas WHERE id =".$id);
  $persona = $sentencia->fetch_assoc() ;
?> 
<html lang="es">
<head>
	<meta charset="UTF-8">	
</head>
<body>
	<form method="post" action="guardarDatos.php">
		<!-- Ocultamos el ID para que el usuario  -->
		<input type="hidden" name="nombre" value="<?php echo $persona["nombre"]; ?>">

		<label for="usuario">usuario:</label>
		<br>
		<input value="<?php echo $persona["usuario"]?>" name="usuario" required type="text" id="usuario" placeholder="Escribe tu usuario...">
		<br><br>
		<label for="correo">correo:</label>
		<br>
		<input value="<?php echo $persona["correo"]; ?>" name="correo" required type="text" id="correo" placeholder="Escribe tu correo...">
		<br><br>
		<label for="contraseña">contraseña</label>
		<select name="contraseña" required name="contraseña" id="contrseña">
		</select>
		<br><br><input type="submit" value="Editar Cambios">
	</form>
</body>
</html>