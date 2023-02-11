<?php

// Decode do json (GET)
$data_turma = file_get_contents('http://camerascomputex.ddns.net:8080/escola/ws_controller.php?action=getAlunosTurma&ano=20211&escola=1&grau_serie=15&turno=M&turma=1&status=C');

$turma = json_decode($data_turma);

/*
 * *FPDF*
 * ================================
 */

// Import
require_once "fpdf185/fpdf.php";

// Instancia classe
$pdf = new FPDF("P", "mm", "A4");

$pdf->AddPage();

// Variáveis
$arquivo = "relatorio_turma.pdf";
$tipo_pdf = "I";

// Formatar
$size = 16;
$fonte = "Arial";
$estiloHeader = "B";
$estilo = "";
$border = "1";
$alignC = "C";

// Célula
$largura = 14;
$altura = 10;

// Header - Tabela
$pdf->SetFont($fonte, $estiloHeader, $size);

$pdf->Cell($largura, $altura, "Matrícula", $border, 1, $alignC);
$pdf->Cell($largura, $altura, "Nome", $border, 1, $alignC);
$pdf->Cell($largura, $altura, "Sequência", $border, 1, $alignC);
$pdf->Cell($largura, $altura, "Status", $border, 1, $alignC);

// Corpo - Tabela
foreach ($turma as $aluno) {
  $pdf->SetFont($fonte, $estilo, $size);
  
  $pdf->Cell($largura, $altura, $aluno->matricula, $border, 1, $alingC);
  $pdf->Cell($largura, $altura, $aluno->nome, $border, 1, $alingC);
  $pdf->Cell($largura, $altura, $aluno->sequencia, $border, 1, $alingC);
  $pdf->Cell($largura, $altura, $aluno->status, $border, 1, $alingC);
};

$pdf->Output();
