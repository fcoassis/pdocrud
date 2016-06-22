<?php

require_once 'conexao.php';
require_once 'Aluno.php';

$aluno = new Aluno($conexao);

$result = $aluno->listar();
$rs = count($result);

if($rs == 0){
	echo "Nenhum aluno cadastrado!";
}
foreach ($aluno->listar() as $c) {
	echo $c['nome']." - ". $c['nota']. "<br>";
}
?>