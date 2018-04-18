<?php 
	class Usuario {
		private $id_usuario;
		private $tipo_usuario;//fazer no controller
		private $login;
		private $senha;
		private $email_usuario;
		private $nome_usuario;
		private $telefone_usuario;
		private $status;
		private $campus_usuario;
		private $id_cartao;

	public function getId_usuario(){
		return $this->id_usuario;
	}

	public function setId_usuario($id_usuario){
		$this->id_usuario = $id_usuario;
	}

	public function getTipo_usuario(){
		return $this->tipo_usuario;
	}

	public function setTipo_usuario($tipo_usuario){
		$this->tipo_usuario = $tipo_usuario;
	}

	public function getLogin(){
		return $this->login;
	}

	public function setLogin($login){
		$this->login = $login;
	}

	public function getSenha(){
		return $this->senha;
	}

	public function setSenha($senha){
		$this->senha = $senha;
	}

	public function getEmail_usuario(){
		return $this->email_usuario;
	}

	public function setEmail_usuario($email_usuario){
		$this->email_usuario = $email_usuario;
	}

	public function getNome_usuario(){
		return $this->nome_usuario;
	}

	public function setNome_usuario($nome_usuario){
		$this->nome_usuario = $nome_usuario;
	}

	public function getTelefone_usuario(){
		return $this->telefone_usuario;
	}

	public function setTelefone_usuario($telefone_usuario){
		$this->telefone_usuario = $telefone_usuario;
	}

	public function getStatus(){
		return $this->status;
	}

	public function setStatus($status){
		$this->status = $status;
	}

	public function getCampus_usuario(){
		return $this->campus_usuario;
	}

	public function setCampus_usuario($campus_usuario){
		$this->campus_usuario = $campus_usuario;
	}

	public function getId_cartao(){
		return $this->id_cartao;
	}

	public function setId_cartao($id_cartao){
		$this->id_cartao = $id_cartao;
	}
}
?>