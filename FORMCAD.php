<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Usuários</title>
	<link rel="stylesheet" href="css/index.css">
</head>
<body>
<div class="form"> 

	<h1>Formulário de Cadastro</h1>
	<form action="cad.php" method="post">
		<label for="nome">Nome:</label>
		<input type="text" name="nome" id="nome" required><br><br>
		
		<label for="email">Email:</label>
		<input type="email" name="email" id="email" required><br><br>
		
		<label for="senha">Senha:</label>
		<input type="password" name="senha" id="senha" required><br><br>
		
		<input type="submit" value="Enviar">
</div>
	</form>

</body>
</html>