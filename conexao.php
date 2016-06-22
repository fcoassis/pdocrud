<?php

try{
	$conexao = new \PDO("mysql:host=localhost;dbname=pdo","root");
	
}
catch(\PDOException $e){
	die("N�o foi poss�vel estabelecer a conex�o com o banco de dados: Erro código:".$e->getCode().": ".$e->getMessage());
}

?>