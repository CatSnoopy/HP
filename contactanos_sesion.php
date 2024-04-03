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

if ($resultado === TRUE) {
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Notificación</title>
  <link rel="stylesheet" > 
</head>
<body>
      <h2>Ha sido enviado exitosamente</h2>
      <a href="Pagina_sesion.html">Volver</a>
        <p>Gracias, te estaremos contactando.</p>
</body>
</html>
<?php
}
else{
  echo "Algo salió mal. Por favor verifica que la tabla! ";
}

?>