<?php

// Decode do json (GET)
$data_turma = file_get_contents("http://camerascomputex.ddns.net:8080/escola/ws_controller.php?action=getAlunosTurma&ano=20211&escola=1&grau_serie=15&turno=M&turma=1&status=C");

$turma = json_decode($data_turma);

/*
 * *FPDF*
 * ================================
 */

define("FPDF_FONTPATH", 'fpdf185/font/');

// Import
require('fpdf185/fpdf.php');

// Variáveis
$arquivo = 'relatorio_turma.pdf';
$tipo_pdf = 'I';
$logotipo = 'imgs/logotipo.png';

// Extensão da Classe
class PDF extends FPDF 
{
  // Cabeça da página
  function Header()
  {
    $this->Image($logotipo, 80, 6, 80);
    $this->SetFont('Arial', 'B', 15);
    $this->Cell(80);
    $this->Cell(30, 10, 'Titulo', 1, 0, 'C');
    $this->Ln(20);
  }
  
  function Footer()
  {
    $this->SetY(-15);
    $this->SetFont('Arial', 'I', 8);
    $this->Cell(0, 10, 'Pagina ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
  }
}

// Instancia classe
$pdf = new FPDF("P", "mm", "A4");
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 8);

// Header - Tabela
$pdf->Cell(20, 9, "Matricula", 1, 0, 'C');
$pdf->Cell(70, 9, "Nome", 1, 0, 'C');
$pdf->Cell(30, 9, "Sequencia", 1, 0, 'C');
$pdf->Cell(30, 9, "Status", 1, 1, 'C');

// Corpo - Tabela
$pdf->SetFont('Arial', '', 9);

foreach ($turma as $aluno) {
  
  $pdf->Cell(20, 9, $aluno->matricula, 1, 0, 'C');
  $pdf->Cell(70, 9, $aluno->nome, 1, 0, 'C');
  $pdf->Cell(30, 9, $aluno->sequencia, 1, 0, 'C');
  $pdf->Cell(30, 9, $aluno->status, 1, 1, 'C');

};

$pdf->Output($arquivo, $tipo_pdf);
