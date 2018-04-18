<?php 
	class Professor{
		private $SIAPE;
		private $id_usuario;
		
	public function getSIAPE(){
		return $this->SIAPE;
	}

	public function setSIAPE($SIAPE){
		$this->SIAPE = $SIAPE;
	}

	public function getId_usuario(){
		return $this->id_usuario;
	}

	public function setId_usuario($id_usuario){
		$this->id_usuario = $id_usuario;
	}
	}
?>