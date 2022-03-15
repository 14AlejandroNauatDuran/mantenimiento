<?php
require('fpdf.php');
include('db.php');
session_start();


class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('../plantilla/dist/img/isysa.png',140,-5,60);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(50);
    // Título
    $this->Cell(10,10, utf8_decode('Industria Salinera de Yucatán, S.A. de C.V'),0,0,'C');
    // Salto de línea
    $this->Ln(20);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,utf8_decode('ORDEN DE TRABAJO'));
$pdf->Output();
?>