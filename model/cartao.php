<?php
	class Cartao{
		private $id_cartao;
		private $codigo_cartao;
		private $id_usuario;

	public function getId_cartao(){
		return $this->id_cartao;
	}

	public function setId_cartao($id_cartao){
		$this->id_cartao = $id_cartao;
	}

	public function getCodigo_cartao(){
		return $this->codigo_cartao;
	}

	public function setCodigo_cartao($codigo_cartao){
		$this->codigo_cartao = $codigo_cartao;
	}

	public function getId_usuario(){
		return $this->id_usuario;
	}

	public function setId_usuario($id_usuario){
		$this->id_usuario = $id_usuario;
	}
	}

?>