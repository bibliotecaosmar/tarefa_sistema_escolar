<?php

// Decode do json (GET)
$data_page = file_get_contents('http://camerascomputex.ddns.net:8080/escola/mobile_login.php?matricula=2011004&senha=99999999&token=X&so=ios');
$data_horario = file_get_contents('http://camerascomputex.ddns.net:8080/escola/json_horario_aluno.php?matricula=2011004&senha=99999999&ano=20211');

$page = json_decode($data_page);
$horario = json_decode($data_horario);

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

?>

<?php Include 'head.php' ?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Escola</th>
      <th scope="col">Código da Série</th>
      <th scope="col">Série</th>
      <th scope="col">Turno</th>
      <th scope="col">Turma</th>
      <th scope="col">Código da Disciplina</th>
      <th scope="col">Disciplina</th>
      <th scope="col">Início</th>
      <th scope="col">Fim</th>
      <th scope="col">Professor</th>
    </tr>
  </thead>
  <tbody>
   <?php

    for ($i=0; $i<10; $i++;) {
      echo '<th scope="col">#</th>'
      echo '<td scope="col">Escola</th>'
      echo '<td scope="col">Código da Série</th>'
      echo '<td scope="col">Série</th>'
      echo '<td scope="col">Turno</th>'
      echo '<td scope="col">Turma</th>'
      echo '<td scope="col">Código da Disciplina</th>'
      echo '<td scope="col">Disciplina</th>'
      echo '<td scope="col">Início</th>'
      echo '<td scope="col">Fim</th>'
      echo '<td scope="col">Professor</th>'
        
    };

  ?>
  </tbody>

  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

<?php Include 'footer.php' ?>


