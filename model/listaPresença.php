<?php 
	class Presenca{
		private $id_private;
		private $id_usuario;
		private $status;
		private $horario;

	public function getId_private(){
		return $this->id_private;
	}

	public function setId_private($id_private){
		$this->id_private = $id_private;
	}

	public function getId_usuario(){
		return $this->id_usuario;
	}

	public function setId_usuario($id_usuario){
		$this->id_usuario = $id_usuario;
	}

	public function getStatus(){
		return $this->status;
	}

	public function setStatus($status){
		$this->status = $status;
	}

	public function getHorario(){
		return $this->horario;
	}

	public function setHorario($horario){
		
	}

?>