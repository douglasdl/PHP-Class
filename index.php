<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Passando variaveis PHP para JavaScript</title>
	</head>
	<body>

		<?php
			include_once("Pessoa.php");
			$pessoa = new Pessoa("Douglas", "Dias Leal", 1.75);
			echo $pessoa->criaObjJS($pessoa);
		?>

		<h1>Testando um objeto JavaScript passado pelo PHP</h1>

		<p><strong>Nome:</strong> <span id="txtNome"></span></p>
		<p><strong>Sobrenome:</strong> <span id="txtSobrenome"></span></p>
		<p><strong>Altura:</strong> <span id="txtAltura"></span></p>

		<script type="text/javascript" src="script.js"></script>
	</body>
</html>