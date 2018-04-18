<?php
	
	require_once '../control/conexao.php';
	
	class AlunoDao {
		private $con;
		private $stm;
		
		function __construct() {
			$o = new Conexao();
			$this->con = $o->Conectar();
		}

		function insereAluno(Aluno $a){
			$retorno=null;
			$sql='INSERT INTO tbAluno(idAluno, tipoAluno)VALUES(:idAluno, :tipoAluno)';
			try {
				$this->stm = $this->con->prepare($sql);
				
				$idAluno = $a->getId_aluno();
				$idAluno = $a->getTipo_aluno();
				

				$this->stm->bindValue(':idAluno', $idAluno);
				$this->stm->bindValue(':tipoAluno', $tipoAluno);
							
				
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
