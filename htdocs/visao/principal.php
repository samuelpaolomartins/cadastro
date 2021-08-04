<?php 

session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true)){


	unset($_SESSION['login']);
	unset($_SESSIO ['senha']);
	
	header('location:../index.php');
}

?>
<html>
<head>
<meta charset="utf-8">
<title>Tela pricipal</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="application/Javascript" src="../usuario/usuario.js"></script>
</head>

<body>
	<form method="POST">
	<fieldset id="vaso">
		
		<input type="button" onClick="listar();" value="Lista">
		<input type="hidden" name="acao" id="acao" value="lista">
		
		<input type="button" onClick="cadastro();" value="Cadastrar">
		<input type="hidden" name="acao" id="acao" value="cadastrar">
		
		<input type="button" onClick="editar();" value="Editar">
		<input type="hidden" name="acao" id="acao" value="editar">
		
	
	</fieldset>	
	</form>
</body>
</html>