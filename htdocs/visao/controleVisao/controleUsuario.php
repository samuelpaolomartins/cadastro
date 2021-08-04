<?php

	require_once($_SERVER["DOCUMENT_ROOT"]."../controle/controle_usuario.php");

	@$login = $_POST['login'];
	@$senha = $_POST['senha'];
	@$id = $_POST['id'];
	@$nome = $_POST['nome'];
	@$idade = $_POST['idade'];
	//@$cidade = $_POST['cidade'];
	@$acao = $_POST['acao'];

	if ($acao == "logar"){
		
		$obj_login = new Usuario();
		$result = $obj_login->verificar($login, $senha);
		
		if($result == 1){
			
			session_start();
			$_SESSION['login'] = $login;
			$_SESSION['senha'] = $senha;
			
		}else{
			if(isset($_SESSION['login']))
			{
			
			unset($_SESSION['login']);
			unset($_SESSION['senha']);
				
			}
		}
		echo $result;
	
	}else if($acao == "inserir"){

		$obj_cliente = new Usuario();
		$result = $obj_cliente->insere($nome, $idade);

	}else if($acao == "deletar"){

		$obj_cliente = new Usuario();
		$result = $obj_cliente->deletar($id);

	}else if($acao == "altera"){
		
		$obj_cliente = new Usuario();		
		$result = $obj_cliente->atualizar($nome, $idade, $id);
	
	}

?>

