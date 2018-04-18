<?php

	class conexao {
		private $con;

		function Conectar() {
			$retorno = null;
			try {
				$usuario = "root";
				$senha = "bancodedados";
				$this->con = new \PDO ("mysql:host=localhost; dbname=dbProjetoIntegrador", $usuario, $senha);
				$this->con->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
				$retorno = $this->con;
			} catch (\PDOException $e) {
				echo $e->getMessage();
			}

			return $retorno;
		}
	}

?>
