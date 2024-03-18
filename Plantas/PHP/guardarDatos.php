<?php

#Salir si alguno de los datos no está presente
if(
	!isset($_POST["nombre"]) || 
	!isset($_POST["apellidos"]) || 
	!isset($_POST["sexo"]) || 
	!isset($_POST["id"])
) exit();

#Si todo va bien, se ejecuta esta parte del código...

include_once "../conexion.php";
$nombre = $_POST["nombre"];
$usuario = $_POST["usuario"];
$correo = $_POST["correo"];
$contraseña = $_POST["contraseña"];

$sentencia = $base_de_datos->prepare("UPDATE personas SET usuario = ?, correo = ?, contraseña = ? WHERE nombre = ?;");
$resultado = $sentencia->execute([$usuario, $correo, $contraseña, $nombre]); # Pasar en el mismo orden de los ?
if($resultado === TRUE)
   echo "Cambios guardados";
else 
	echo "Algo salió mal. Por favor verifica que la tabla exista, así como el ID del usuario";


	echo" <br><a href='../lista.php'>Atras</a>";
	
?>