<?php

	include("../visao/principal.php");

	$login = $_POST['login'];
	$senha = $_POST['senha'];
	$acao = $_POST['acao'];

	$obj_cliente = new Cliente();
	$obj_login = new Login();

	if ($acao == "logar"){
		
		$result = $obj_login->verificar($login, $senha);
		
		if($result == 1){
			
			session_start();
			$_SESSION['login'] = $login;
			$_SESSION['senha'] = $senha;
			
		}else{
			
			unset($_SESSION['login']);
			unset($_SESSION['senha']);
			
		}
		echo $result;
	}
	
?>
