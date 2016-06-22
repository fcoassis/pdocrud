<?php

class Aluno{
	
	private $db;
	private $id;
	private $nome;
	private $nota;
	
	
	
	public function __construct(\PDO $db)
	{
		$this->db = $db;
	}
	
	public function find($id){
		$query = "Select * from alunos where id=:id";
		
		$stmt = $this->db->prepare($query);
		$stmt->bindValue(":id", $id);
		$stmt->execute();
		
		return $stmt->fetch(\PDO::FETCH_ASSOC);
	}
	
	public function listar()
	{
		$query = "Select * from alunos";
		
		$stmt = $this->db->query($query);
		return $stmt->fetchAll(\PDO::FETCH_ASSOC);
	}
	
	public function inserir()
	{
		$query = "Insert into alunos(nome,nota) Values(:nome, :nota)";	
		$stmt = $this->db->prepare($query);
		$stmt->bindValue(':nome', $this->getNome());
		$stmt->bindValue(':nota', $this->getNota());
		if($stmt->execute()){
			return true;
		}
		
	}
	
	public function alterar()
	{
		$query = "Update alunos set nome=:nome, nota=:nota Where id=:id";	
		$stmt = $this->db->prepare($query);
		$stmt->bindValue(':id', $this->getId());
		$stmt->bindValue(':nome', $this->getNome());
		$stmt->bindValue(':nota', $this->getNota());
		if($stmt->execute()){
			return true;
		}
	}
	
	public function deletar($id)
	{
		$query = "delete from alunos where id=:id";	
		$stmt = $this->db->prepare($query);
		$stmt->bindValue(':id', $id);
		
		if($stmt->execute()){
			return true;
		}
	}
	
	
	public function setNota($nota)
	{
		$this->nota = $nota;
		return $this;
	}
	
	public function getNota()
	{
		return $this->nota;
	}
	
	public function setId($id)
	{
		$this->id = $id;
		return $this;
	}
	
	public function getId()
	{
		return $this->id;
	}
	
	public function setNome($nome)
	{
		$this->nome= $nome;
		return $this;
	}
	
	public function getNome()
	{
		return $this->nome;
	}
}

?>