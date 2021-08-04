<?php

session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true)){


	unset($_SESSION['login']);
	unset($_SESSIO ['senha']);
	
	header('location:../index.php');
}
	include("../controle/controleCliente.php");
	
?>
<html>
<head>
<meta charset="utf-8">
<title>listar clientes</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="application/Javascript" src="../usuario/usuario.js"></script>
</head><?php
		$obj_cliente = new Cliente();
		$arrayClientes = $obj_cliente->busca();
	?>

<body>
	<form method="POST">
	<fieldset id="vaso">
		
		<input type="button" onClick="principal();" value="Principal">
		<input type="hidden" name="acao" id="acao" value="principal">
		
		<input type="button" onClick="cadastro();" value="Cadastrar">
		<input type="hidden" name="acao" id="acao" value="cadastrar">
		
		<input type="button" onClick="editar();" value="Editar">
		<input type="hidden" name="acao" id="acao" value="editar">
		
	
	</fieldset>	
	</form>
	<table border='1'>
		<tr>
			<td>Name</td>
			<td>Age</td>
			<td>Action</td>
			<td>Delete</td>
		</tr>		
	<?php
		foreach($arrayClientes as $value){
	?>	
		<tr>
			<td><?php echo $value['nomeCliente']?></td>
			<td><?php echo $value['idadeCliente']?></td>
			<td><input type="button" onClick="telaEditar(<?php echo $value['idCliente']?>)"value="Editar"></td>
			<td><input type="button" onClick="deletar(<?php echo $value['idCliente']?>)" value="Delete"></td>
		</tr>	
	<?php
		}
	?>
	</table>
	
	<form id="formulario" action="editarUsuario.php" method="POST">
		<input type="hidden" id="idFormulario" name="id">
	</form>
	
	</form>
</body>
</html>