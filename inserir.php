<?php

require_once 'conexao.php';
require_once 'Aluno.php';

$aluno = new Aluno($conexao);

$aluno->setNome("Faustao")
		->setNota(8);
		
$resultado = $aluno->inserir();
echo $resultado;
		



?>