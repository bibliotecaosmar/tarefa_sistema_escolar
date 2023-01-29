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



<?php Include 'footer.php' ?>


