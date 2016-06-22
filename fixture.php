<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php
require_once("conexao.php");

$nomes = array(
    0 => array(
        "nome" => "Joao",
        "nota" => 1,
    ),
    1 => array(
        "nome" => "Maria",
        "nota" => 2,
    ),
    2 => array(
        "nome" => "Jose",
        "nota" => 3,
    ),
    3 => array(
        "nome" => "Clovis",
        "nota" => 4,
    ),
    4 => array(
        "nome" => "Saulo",
        "nota" => 5,
    ),
    5 => array(
        "nome" => "Chico",
        "nota" => 6,
    ),
    6 => array(
        "nome" => "Paula",
        "nota" => 7,
    ),
    7 => array(
        "nome" => "Livia",
        "nota" => 8,
    ),
);


$sql = "CREATE DATABASE IF NOT EXISTS pdo;
use pdo;
CREATE TABLE IF NOT EXISTS `alunos` (
 `alunos`.`id` INT NOT NULL AUTO_INCREMENT,
 `alunos`.`nome` VARCHAR NOT NULL,
 `alunos`.`nota` INT NOT NULL,
 PRIMARY KEY (`id`)
);

DELETE FROM alunos;

";

$stmt = $conexao->prepare($sql);
$stmt->execute();

$sql = 'INSERT INTO alunos (nome, nota) VALUES (:nome, :nota)';
$stmt = $conexao->prepare($sql);

foreach($nomes as $nome){
    $stmt->execute(array( ':nome' => $nome['nome'], ':nota' => $nome['nota'] ));
}

?>

<h2>Banco de dados 'pdo' e tabela 'alunos' criadas com sucesso!</h2>
<h4>Dados inseridos com sucesso!</h4>
</body>
</html>