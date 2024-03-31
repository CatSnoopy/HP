<?php
// paginas de referencias
//https://huguidugui.wordpress.com/2013/11/21/fpdf-cabeceras-datos/
// https://huguidugui.wordpress.com/2013/11/22/fpdf-reporte-estatico/
//https://huguidugui.wordpress.com/2013/11/28/fpdf-reporte-dinamico/
//https://huguidugui.wordpress.com/2013/11/12/pdf-2-de-2-texto-dinamico-con-llamada-a-la-bd/


include_once('Generar_PDF_TABLAS2.php');
$pdf = new PDF();
 
$pdf->AddPage();
 
 
$miCabecera = array('Nombre', 'Apellido', 'Matrícula');
 
$misDatos = array(
            array('nombre' => 'Hugo', 'apellido' => 'Martínez', 'matricula' => '20420423'),
            array('nombre' => 'Araceli', 'apellido' => 'Morales', 'matricula' =>  '204909'),
            array('nombre' => 'Georgina', 'apellido' => 'Galindo', 'matricula' =>  '2043442'),
            array('nombre' => 'Luis', 'apellido' => 'Dolores', 'matricula' => '20411122'),
            array('nombre' => 'Mario', 'apellido' => 'Linares', 'matricula' => '2049990'),
            array('nombre' => 'Viridiana', 'apellido' => 'Badillo', 'matricula' => '20418855'),
            array('nombre' => 'Yadira', 'apellido' => 'García', 'matricula' => '20443335')
            );
 
$pdf->tablaHorizontal($miCabecera, $misDatos);
 
$pdf->Output(); //Salida al navegador
?>