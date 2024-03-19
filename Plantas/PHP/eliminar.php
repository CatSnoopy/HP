<?php

   if(!isset($_GET["nombre"])) exit();
  
    $id = $_GET["nombre"];
  
	include_once "../conexion.php";
	
	$sentencia = $base_de_datos->prepare("DELETE FROM personas WHERE nombre = ?;");
	$resultado = $sentencia->execute([$nombre]);
	
	if($resultado === TRUE) 
	   echo "Eliminado correctamente!<br>";
	else 
	  echo "No fue posible eliminar el registro <br>";
	
	echo" <a href='../lista.php'>Atras</a>";
?>