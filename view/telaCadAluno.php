<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Alunos</title>
	<meta charset="utf-8">
</head>
<body>
<center>
<form action="../control/usuarioController.php" method="post">
	<h1>Cadastro de alunos</h1>
	<label>Tipo de Cadastro:<input name="tipoUsu" type="text" value="Aluno" disabled="disabled"></input></label><br>
	<label>Nome:<input type="text" name="nomeUsu"></input></label><br>
	<label>Campus pertencente:<select name="campusUsu">
		<option></option>
		<option value="1">1</option>
		<option value="2">2</option>
	</select></label><br>
	<label>Nº de matrícula:<input type="text" name="idAluno"></input></label><br>
	<label>Nível:
	<select name="nivelAluno" required>
	<option ></option>
	<option value="superior">Superior</option>
	<option value="medio">Médio</option>
	</select></label><br>
	<label> Curso:
		<select name="cursoAluno">
			<option></option>

			<option value="1">1</option>
			<option value="2">2</option>
		</select>
	</label><br>
	<label>
		Período/Ano:
		<select name="anoAluno" required>
			<option></option>
			<option value="1">1</option>
			<option value="2">2</option>
		</select>
	</label><br>
	<label>Login:<input type="text" name="loginUsu"></input></label><br>
	<label>Senha:<input type="password" name="senhaUsu"></input></label><br>
	<label>Email:<input type="mail" name="emailUsu"></input></label><br>
	<label>Telefone para contato:<input type="text" name="telUsu"></input></label><br>
	
	<input type="hidden" name="acao" value="1">
	<input type="submit" value="Cadastrar"><br>
</center>
</form>
</body>
</html>