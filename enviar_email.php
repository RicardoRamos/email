<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>enviar_email</title>
	<!--[if IE]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<style>
	  article, aside, figure, footer, header, hgroup,
	  menu, nav, section { display: block; }
	</style>
	
</head>
<body>
	<div class="container">
	<?php
	$email= 'ricardoramos021@gmail.com';
	$ASSUNTO= $_POST['assunto'];
	$mensagem= $_POST['mensagem'];
		mail ($email, $ASSUNTO, $mensagem);
	
	?>
		
	</div>
</body>
</html>