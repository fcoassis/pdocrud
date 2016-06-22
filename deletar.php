<?php

require_once 'conexao.php';
require_once 'Aluno.php';

$aluno = new Aluno($conexao);
		
$resultado = $aluno->deletar(58);
//echo $resultado;
		
foreach ($aluno->listar() as $c) {
	echo $c['nome']." - ". $c['nota']. "<br>";
}


?>