<?php
require('Generar_PDF_TABLAS2.php'); // Incluye la clase PDF personalizada

// Incluir archivo de conexión a la base de datos
include_once('conexion.php');

// Crear una instancia de la clase PDF
$pdf = new PDF();

// Agregar una página al documento PDF
$pdf->AddPage();

// Cabecera de la tabla
$miCabecera = array('ID', 'Nombre', 'Usuario', 'Correo');

// Consultar los datos de la tabla 'usuario'
$consulta = $base_de_datos->query("SELECT * FROM usuario");

// Inicializar un array para almacenar los datos
$misDatos = array();

// Recorrer los resultados de la consulta y agregarlos al array $misDatos
while ($row = $consulta->fetch_assoc()) {
    $misDatos[] = array(
        'id_usuario' => $row['id_usuario'],
        'nombre' => $row['nombre'],
        'usuario' => $row['usuario'],
        'correo' => $row['correo']
    );
}

// Generar la tabla en el PDF
$pdf->tablaHorizontal($miCabecera, $misDatos);

// Mostrar el PDF en el navegador
$pdf->Output();
?>