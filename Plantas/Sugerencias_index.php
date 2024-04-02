<?php
#isset significa q la variable que se recibe esta vacia, entonces sale 
if (  !isset($_POST["usuario"]) || !isset($_POST["nombreP"]) || !isset($_POST["tipo"])   ) exit();

include_once "conexion.php";

$usuario   = $_POST["usuario"];
$nombreP   = $_POST["nombreP"];
$tipo      = $_POST["tipo"]; 



$sentencia = $base_de_datos->prepare("INSERT INTO sugerencias(usuario, nombreP,tipo) VALUES (?, ?, ?);");
$resultado = $sentencia->execute([$usuario, $nombreP, $tipo]); # Pasar en el mismo orden de los ?
#execute regresa un booleano. True en caso de que todo vaya bien, falso en caso contrario.
#Con eso podemos evaluar
if ($resultado === TRUE) {
  // Insertado correctamente, mostramos el mensaje de éxito
  ?>
  <!DOCTYPE html>
  <html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notificación</title>
    <link rel="stylesheet" href="css/popup.css"> 
  </head>
  <body>
    <div id="popup" class="overlay">
      <div id="popupBody">
        <h2>Ha sido enviado exitosamente</h2>
        <a id="cerrar" href="#">&times;</a>
        <div class="popupContent">
          <p>Gracias.</p>
        </div>
      </div>
    </div>
  </body>
  </html>
  <?php
} else {
  echo "Algo salió mal. Por favor verifica que la tabla!";
}
?>