<?php
session_start();

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title> Chat </title>
	</head>
	
	<body>
      	
		<!-- Link para renderizar para o formulário-->

			
	
		<h1> Formulário de cadastro </h1>
		<form method="POST" action="login.php">
		<fieldset>
        <legend>INSERIR NOVO ESTUDANTE</legend>  			
			<label>Nome:</label>
			<input type="text" name="nome"><br><br>
			
            <label>Senha:</label>
			<input type="int" name="senha"placeholder="senha"><br><br>
			
			<input type="submit" value="Enviar"><br><br>
			
			
						<a href="cria_conta.php">CRIAR CONTA</a>


			</fieldset>
		</form>
	</body> 
</html>