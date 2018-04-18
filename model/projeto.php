<?php 
	class Projeto{
		private $id_projeto;
		private $id_aluno;
		private $id_professor;
		private $hora_total;
		private $nome_projeto;
		private $status;

	public function getId_projeto(){
		return $this->id_projeto;
	}

	public function setId_projeto($id_projeto){
		$this->id_projeto = $id_projeto;
	}

	public function getId_aluno(){
		return $this->id_aluno;
	}

	public function setId_aluno($id_aluno){
		$this->id_aluno = $id_aluno;
	}

	public function getId_professor(){
		return $this->id_professor;
	}

	public function setId_professor($id_professor){
		$this->id_professor = $id_professor;
	}

	public function getHora_total(){
		return $this->hora_total;
	}

	public function setHora_total($hora_total){
		$this->hora_total = $hora_total;
	}

	public function getNome_projeto(){
		return $this->nome_projeto;
	}

	public function setNome_projeto($nome_projeto){
		$this->nome_projeto = $nome_projeto;
	}

	public function getStatus(){
		return $this->status;
	}

	public function setStatus($status){
		$this->status = $status;
	}
	}

?>