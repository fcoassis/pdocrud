<?php

require_once 'conexao.php';
require_once 'Aluno.php';

$aluno = new Aluno($conexao);
		
$resultado = $aluno->find(57);

echo $resultado['nome']. " - ".$resultado['nota'];



?>