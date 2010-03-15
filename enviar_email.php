<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Untitled Page</title>

</head>
<body>
	<div class="container">
	<h1>Contato</h1>

		<?php
error_reporting (0);//desativa todos os erros
			$email= 'julioprotzek@gmail.com';
			$assunto= $_POST['assunto'];
			$mensagem= $_POST['mensagem'];

			if ( mail( $email, $assunto, $mensagem ) ):

		?>

			<p>seu email foi enviado</p>

		<?php else: ?>

			<p>Não foi possível enviar seu email.</p>

		<?php endif; ?>
	</div>
</body>
</html>