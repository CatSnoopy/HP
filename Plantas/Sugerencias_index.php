<?php
#isset significa q la variable que se recibe esta vacia, entonces sale 
if (  !isset($_POST["Usuario"]) || !isset($_POST["NombreP"]) || !isset($_POST["Tipo"])   ) exit();

include_once "conexion.php";

$nombre   = $_POST["Usuario"];
$email    = $_POST["NombreP"];
$mensaje  = $_POST["Tipo"]; 



$sentencia = $base_de_datos->prepare("INSERT INTO Sugerencias(Usuario, Nombre,Tipo) VALUES (?, ?, ?);");
$resultado = $sentencia->execute([$Usuario, $NombreP, $Tipo]); # Pasar en el mismo orden de los ?
#execute regresa un booleano. True en caso de que todo vaya bien, falso en caso contrario.
#Con eso podemos evaluar

if ($resultado === TRUE) 
   echo "Insertado correctamente";
else
  echo "Algo salió mal. Por favor verifica que la tabla! ";


?>