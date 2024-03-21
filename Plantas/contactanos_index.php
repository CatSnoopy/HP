<?php
#isset significa q la variable que se recibe esta vacia, entonces sale 
if (  !isset($_POST["nombre"]) || !isset($_POST["email"]) || !isset($_POST["mensaje"])   ) exit();

include_once "conexion.php";

$nombre   = $_POST["nombre"];
$email    = $_POST["email"];
$mensaje  = $_POST["mensaje"]; 



$sentencia = $base_de_datos->prepare("INSERT INTO contactenos(nombre, correo, mensaje) VALUES (?, ?, ?);");
$resultado = $sentencia->execute([$nombre, $email, $mensaje]); # Pasar en el mismo orden de los ?
#execute regresa un booleano. True en caso de que todo vaya bien, falso en caso contrario.
#Con eso podemos evaluar

if ($resultado === TRUE) 
   echo "Insertado correctamente";
else
  echo "Algo salió mal. Por favor verifica que la tabla! ";


?>