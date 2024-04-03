<?php

require('fpdf186/fpdf.php');
require('conexion.php'); // incluye el archivo de conexión

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);

$pdf->Cell(60);
$pdf->Write(5, 'Informe de Plantas');
$pdf->Ln(10);
$pdf->Cell(20, 10, '#1', 1, 1, 'C');

$pdf->Image('imagenes/General/lplanta.jpg', 80, 30, 50, 0, 'JPG', 'http://www.google.com');
$pdf->Ln(60);


$pdf->SetFont('Arial', '', 12);

// Fetch data from the database
$setence = $base_de_datos->query("SELECT * FROM plantas"); // utiliza $base_de_datos 
$num = 1;
while ($row = $setence->fetch_assoc()) {
    $pdf->Cell(10);
    $pdf->Cell(20, 10, $num++, 1, 1, 'C');
    $pdf->Cell(10);
    $pdf->Cell(0, 10, 'Nombre: ' . $row['nombre'], 0, 1);
    $pdf->Cell(10);
    $pdf->Cell(0, 10, 'Tipo: ' . $row['Tipo'], 0, 1);
    
    // Add more cells for other data fields as needed
}

$pdf->Output();
?>