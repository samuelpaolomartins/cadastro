<?php

session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true)){


unset($_SESSION['login']);
unset($_SESSIO ['senha']);

header('location:../index.php');
}
include("controleCliente.php");
?>

<?php

$id = $_POST["id"];

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Formulário de Edição</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="application/Javascript" src="../usuario.js"></script>
</head>
<?php
$obj_cliente = new Cliente();
$arrayCliente =  $obj_cliente->busca($id);
?>

<body>
<form >
Name: <input type="text" name="nome" id="nome" value="<?php echo $arrayCliente[0]['nomeCliente']?>"><br>
Age: <input type="text" name="idade" id="idade" value="<?php echo $arrayCliente[0]['idadeCliente']?>"><br>

<input type="hidden" name="id" id="id" value="<?php echo $arrayCliente[0]['idCliente']?>">

<input type="button" id="atualizarBtn" onClick="editando();" value="Alterar">
<input type="hidden" name="acao" value="altera">
</form>

</body>
</html>
