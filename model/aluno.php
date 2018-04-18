<?php  
	class Aluno{
		private $id_aluno;
		private $tipo_aluno;
		private $horas_trabalhadas;
		private $id_usuario;
		private $id_curso;

	public function getId_aluno(){
		return $this->id_aluno;
	}

	public function setId_aluno($id_aluno){
		$this->id_aluno = $id_aluno;
	}

	public function getTipo_aluno(){
		return $this->tipo_aluno;
	}

	public function setTipo_aluno($tipo_aluno){
		$this->tipo_aluno = $tipo_aluno;
	}

	public function getHoras_trabalhadas(){
		return $this->horas_trabalhadas;
	}

	public function setHoras_trabalhadas($horas_trabalhadas){
		$this->horas_trabalhadas = $horas_trabalhadas;
	}

	public function getId_usuario(){
		return $this->id_usuario;
	}

	public function setId_usuario($id_usuario){
		$this->id_usuario = $id_usuario;
	}

	public function getId_curso(){
		return $this->id_curso;
	}

	public function setId_curso($id_curso){
		$this->id_curso = $id_curso;
	}
	}
?>