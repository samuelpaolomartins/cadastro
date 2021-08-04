<?php 
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true)){


	unset($_SESSION['login']);
	unset($_SESSIO ['senha']);
	
	header('location:../index.php');
}
?>
<?php
	include("../controle/controleCidade.php");
	include("../controle/controleSexo.php");
?>
<html>
<head>
<meta charset="utf-8">
<title>Tela de cadastro</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="application/Javascript" src="../usuario/usuario.js"></script>
</head><?php
	$obj_cidade = new Cidade();
	$arrayCidade = $obj_cidade->listar();
	$obj_sexo = new Sexo();
	$arraySexo = $obj_sexo->mostra();
?>
<body>
	<form method="POST">
	<fieldset id="vaso">

	<input type="button" onClick="principal();" value="Principal">
	<input type="hidden" name="acao" id="acao" value="principal">

	<input type="button" onClick="listar();" value="Lista">
	<input type="hidden" name="acao" id="acao" value="lista">

	<input type="button" onClick="editar();" value="Editar">
	<input type="hidden" name="acao" id="acao" value="editar">

	</fieldset>
	<h3>Register</h3>
	<label>Name:</label><br><input type="text" name="nome" id="nome"><br>
	<label>Age:</label><br><input type="text" name="numero" id="numero"><br>
	<label>City:</label><br>
	<select name="cidade" id="cidade">
	<?php
		foreach($arrayCidade as $value){
	?>
	  <option value="<?php echo $value['idCidade']  ?>"><?php echo $value['nomeCidade'] ?></option>
	  <?php
	  	}
	?>
	</select><br>
	<label>State:</label><br><input type="text" name="estado" id="estado"><br>
	<label>Country:</label><br><input type="text" name="pais" id="pais"><br>
	<label>Sex:</label><br>
	<select name="sexo" id="sexo">
		<?php
		foreach($arraySexo as $value){
	?>
	  <option value="<?php echo $value['idSexo']  ?>"><?php echo $value['descriSexo'] ?></option>
	   <?php
	  	}
	?>
	</select><br>
		
	<input type="button" id="inserir" onClick="cadastrar();" value="Cadastrar Cliente">
	<input type="hidden" name="acao" value="insere">
	<input type="button" onClick="cadastro();" value="Limpar">
	<input type="hidden" name="acao" value="limpar">

</form>
</body>
</html>