<?php

// Decode do json (GET)
$data_page = file_get_contents('http://camerascomputex.ddns.net:8080/escola/mobile_login.php?matricula=2011004&senha=99999999&token=X&so=ios');
$data_horario = file_get_contents('http://camerascomputex.ddns.net:8080/escola/json_horario_aluno.php?matricula=2011004&senha=99999999&ano=20211');

$page = json_decode($data_page);
$programacao = json_decode($data_horario);

// Componentes da página
$config = $page->config;
$menu = $page->menu;
$escola = $page->escola;
$proximo_ano = $page->proximo_ano;
$proxima_serie = $page->proxima_serie;
$proximo_grau_serie = $page->proximo_grau_serie;
$boleto_processado = $page->boleto_processado;
$permissao_matricula = $page->permissao_matricula;
$data_aceite = $page->data_aceite;
$sti = $page->sti;

function fhora($hora){
  return substr($hora, 0, 2) . ":" . substr($hora, 2, 2) . 'h';
}; 

?>

<?php Include 'head.php' ?>

<div class="container text-center">
  <div class="row align-items-center">
    <div class="col">
      <table class="table table-striped-columns">
      <tbody>
      <?php
        // Dias da Semana
        echo '<tr>';
        for ($i=0; $i<5; $i++) {
          $semana = $programacao->horario[$i];
          echo '  <td class="table-secondary">' . $semana->dia . '</td>';
        };
        echo '</tr>';

        // Programação
        for ($i=0; $i<4; $i++) {
          echo '<tr>';
          for ($j=0; $j<5; $j++) {
            $semana = $programacao->horario[$j];
            $dia = $semana->horarios[$i];
  
            echo '  <td>';
            echo $dia->serie . '<br>'; 
            echo $dia->turno . ' / ' . $dia->turma . '<br>';
            echo $dia->disciplina . '<br>';
            echo 'Prof(a).' . $dia->professor . '<br>';
            echo 'De ' . fhora($dia->inicio) . ' às ' . fhora($dia->fim) . '<br>';  
            echo '</td>';
            };
          echo '</tr>';   
          };
        ?>

        </tbody>

      </table>   

    </div>
  </div>
</div>

<?php Include 'footer.php' ?>


