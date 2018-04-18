<?php
	require_once '../dao/alunoDao.php';
	require_once '../model/aluno.php';
	require_once '../dao/usuarioDao.php';
	require_once '../model/usuario.php';
	require_once '../dao/professorDao.php';
	require_once '../model/professor.php';

	class usuarioController{
		private $acao;
		private $usuario;
		private $usuarioDao;
		private $aluno;
		private $alunoDao;

		public function __construct() {
			if (isset($_REQUEST['acao'])) {
				$this->acao = $_REQUEST['acao'];
			}
			
			$this->usuarioDao = new UsuarioDao();
			$this->usuario = new Usuario();
			$this->alunoDao = new AlunoDao();
			$this->aluno = new Aluno();
			$this->professorDao = new ProfessorDao();
			$this->professor = new Professor();
			
			$this->verificaAcao();
		}
		
		function verificaAcao(){
			switch ($acao) {
				case 1:
					$this->realizaInsercao();
					break;
				
				case 2:

					break;
				case 3:

						break;
			}

		}
		function realizaInsercao(){

			$this->usuario->setNome_usuario($_POST['nomeUsu']);
			$this->usuario->setLogin_usuario($_POST['loginUsu']);
			$this->usuario->setSenha($_POST['senhaUsu']);
			$this->usuario->setEmail_usuario($_POST['emailUsu']);
			$this->usuario->setTelefone_usuario($_POST['telUsu']);
			$this->usuario->setStatus(1);
			$this->usuario->setCampus_usuario($_POST['campusUsu']);

			if ($_POST['tipoUsu']=='Aluno') {
				$this->aluno->setTipo_aluno($_POST['nivelAluno']);
				$this->aluno->setAno_aluno($_POST['anoAluno']);
				$this->aluno->setCurso_aluno($_POST['cursoAluno']);
				$this->aluno->setId_aluno($_POST['idAluno']);
				$result1=$this->alunoDao->insereAluno($this->aluno);
			}
			elseif ($_POST['tipoUsu']=='Professor') {
				# code...
			}
		$result=$this->usuarioDao->insereUsuario($this->usuario);


		}
	}
?>