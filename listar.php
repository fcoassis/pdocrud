<?php

require_once 'conexao.php';
require_once 'Aluno.php';

$aluno= new Aluno($conexao);

foreach ($aluno->listar() as $c) {
	echo $c['nome']." - ". $c['nota']. "<br>";
}
?>