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
    $this->Image('imgs/logotipo.jpg', 30, 12, 15);
    $this->Image('imgs/computex.jpg', 50, 14, 40);
    $this->SetFont('Arial', 'B', 11);
    $this->Cell(60);
    $this->Cell(30, 50, 'Turma - Alunos', 0, 0, 'C');
    $this->Ln(35);
  }
  
  // Footer da página
  function Footer()
  {
    $this->SetY(-15);
    $this->SetFont('Arial', 'I', 8);
    $this->Cell(0, 10, 'Pagina ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
  }

  function HTable()
  {
    // Cores do Header
    $this->SetFillColor(230, 230, 230);

    // Header - Tabela
    $this->Cell(20, 9, utf8_decode("Matrícula"), 1, 0, 'C', 1);
    $this->Cell(70, 9, "Nome", 1, 0, 'C', 1);
    $this->Cell(30, 9, utf8_decode("Sequência"), 1, 0, 'C', 1);
    $this->Cell(30, 9, "Status", 1, 1, 'C', 1);
  }

  function Table($data)
  {
    // Cores da Tabela
    $this->SetFillColor(255, 255, 255);

    // Corpo da Tabela
    foreach ($data as $row) {
  
      $this->Cell(20, 9, $row->matricula, 1, 0, 'C');
      $this->Cell(70, 9, utf8_decode($row->nome), 1, 0, 'C');
      $this->Cell(30, 9, $row->sequencia, 1, 0, 'C');
      $this->Cell(30, 9, $row->status, 1, 1, 'C');

    };
  }
}

// Instancia classe
$pdf = new PDF("P", "mm", "A4");
$pdf->SetLeftMargin(35);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 8);
$pdf->HTable();
$pdf->SetFont('Arial', '', 8);
$pdf->Table($turma);
$pdf->Footer();

$pdf->Output($arquivo, $tipo_pdf);
