<?php
#isset significa q la variable que se recibe esta vacia, entonces sale 
if (  !isset($_POST["nombre"]) || !isset($_POST["usuario"]) || !isset($_POST["correo"]) || !isset($_POST["contraseña"])  ) exit();

include_once "conexion.php";

$nombre    = $_POST["nombre"];
$usuario    = $_POST["usuario"];
$correo  = $_POST["correo"];
$contraseña     = $_POST["contraseña"];


$sentencia = $base_de_datos->prepare("INSERT INTO personas(nombre, usuario, correo, contraseña) VALUES (?, ?, ?);");
$resultado = $sentencia->execute([$nombre, $usuario, $correo, $contraseña]); # Pasar en el mismo orden de los ?
#execute regresa un booleano. True en caso de que todo vaya bien, falso en caso contrario.
#Con eso podemos evaluar

if ($resultado === TRUE) 
   echo "Insertado correctamente";
else
  echo "Algo salió mal. Por favor verifica que la tabla! ";


?>