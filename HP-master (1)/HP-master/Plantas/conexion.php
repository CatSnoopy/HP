<?php
$servername = "127.0.0.1";
$username = "root";
$password = "admin";
// debes cambiar el nombre de la base de datos 
$dbname = "pruebas";

// Create connection
$base_de_datos = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($base_de_datos->connect_error) {
  die("Conexión a la base de datos fallida: " . $base_de_datos->connect_error);
} 



?>