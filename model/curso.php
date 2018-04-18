<?php
	class Curso{
		private $id_curso;
		private $nome_curso;
		private $ano_periodo;
		private $status;

	public function getId_curso(){
		return $this->id_curso;
	}

	public function setId_curso($id_curso){
		$this->id_curso = $id_curso;
	}

	public function getNome_curso(){
		return $this->nome_curso;
	}

	public function setNome_curso($nome_curso){
		$this->nome_curso = $nome_curso;
	}

	public function getAno_periodo(){
		return $this->ano_periodo;
	}

	public function setAno_periodo($ano_periodo){
		$this->ano_periodo = $ano_periodo;
	}

	public function getStatus(){
		return $this->status;
	}

	public function setStatus($status){
		$this->status = $status;
	}
	}

?>