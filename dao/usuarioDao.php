<?php
	
	require_once '../control/conexao.php';
	
	class UsuarioDao {
		private $con;
		private $stm;
		
		function __construct() {
			$o = new Conexao();
			$this->con = $o->Conectar();
		}

		function insereUsuario(Usuario $u){
			$retorno = null;
			$sql = 'INSERT INTO tbUsaurio(nomeUsuario, tipoUsuario, login, senha, emailUsuario,telefoneUsuario, status, campusUsuario)VALUES (:nomeUsuario, :tipoUsuario, :login, :senha, :emailUsuario, :telefoneUsuario, :status, :campusUsuario';
			
			try {
				$this->stm = $this->con->prepare($sql);
				
				$nomeUsuario = $u->getNome_usuario();
				$tipoUsuario=$u->getTipo_usuario();
				$login=$u->getLogin();
				$senha=$u->getSenha();
				$emailUsuario=$u->getEmail_usuario();
				$telefoneUsuario=$u->getTelefone_usuario();
				$status=$u->getStatus();
				$campusUsuario=$u->getCampus_usuario();

				$this->stm->bindValue(':nomeUsuario', $nomeUsuario);
				$this->stm->bindValue(':tipoUsuario', $tipoUsuario);
				$this->stm->bindValue(':login', $login);
				$this->stm->bindValue(':senha', $senha);
				$this->stm->bindValue(':emailUsuario', $emailUsuario);
				$this->stm->bindValue(':telefoneUsuario', $telefoneUsuario);
				$this->stm->bindValue(':status', $status);
				$this->stm->bindValue(':campusUsuario', $campusUsuario);				
				
				$result = $this->stm->execute();
				if ($result == true)
					$retorno = $this->con->lastInsertId();
				else
					$retorno = $result;
				
			} catch (Exception $e) {
				echo $e;
				$retorno = $e;
			}
			
			return $retorno;
		}
?>