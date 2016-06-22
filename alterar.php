<?php

require_once 'conexao.php';
require_once 'Aluno.php';

$aluno= new Aluno($conexao);

$aluno->setId('55')
		->setNome("Chicao Assis")
		->setNota('5');
$resultado = $aluno->alterar();

foreach ($aluno->listar() as $c) {
	echo $c['nome']." - ". $c['nota']. "<br>";
}
?>