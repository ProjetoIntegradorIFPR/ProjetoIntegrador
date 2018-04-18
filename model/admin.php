<?php  
	class Admin{
		private $id_admin;
		private $id_usuario;

	public function getId_admin(){
		return $this->id_admin;
	}

	public function setId_admin($id_admin){
		$this->id_admin = $id_admin;
	}

	public function getId_usuario(){
		return $this->id_usuario;
	}

	public function setId_usuario($id_usuario){
		$this->id_usuario = $id_usuario;
	}
	}
?>