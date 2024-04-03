<?php
require('fpdf186/fpdf.php');
 
class PDF extends FPDF
{
    function cabeceraHorizontal($cabecera)
    {
        $this->SetXY(10, 10);
        $this->SetFont('Arial','B',10);
        foreach($cabecera as $fila)
        {
            //Atención!! el parámetro valor 0, hace que sea horizontal
            $this->Cell(48,7, utf8_decode($fila),1, 0 , 'L' );
        }
    }
    function datosHorizontal($datos)
    {
        $this->SetXY(10,17);
        $this->SetFont('Arial','',10);
        // Recorre los datos y los muestra en celdas
        foreach($datos as $fila)
        {
            $this->Cell(48,7, utf8_decode($fila['id_usuario']),1, 0 , 'L' );
            $this->Cell(48,7, utf8_decode($fila['nombre']),1, 0 , 'L' );
            $this->Cell(48,7, utf8_decode($fila['usuario']),1, 0 , 'L' );
            $this->Cell(48,7, utf8_decode($fila['correo']),1, 0 , 'L' );
            $this->Ln();//Salto de línea para generar otra fila
        }
    }
 
    //Integrando cabecera y datos en un solo método
    function tablaHorizontal($cabeceraHorizontal, $datosHorizontal)
    {
        $this->cabeceraHorizontal($cabeceraHorizontal);
        $this->datosHorizontal($datosHorizontal);
    }
 
} // FIN Class PDF
?>