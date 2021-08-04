<?php

	require_once($_SERVER["DOCUMENT_ROOT"]."../modelo/conexaobd.php");

	class Usuario{
		
		public function verificar($login, $senha){
			
			$obj_con = new conexaobd();
			$conectar = $obj_con->con();
			
			$sql = "SELECT * FROM loginusuario WHERE emailLogin = '".$login."' AND senhaLogin = '".$senha."'";
			
			$resultado = mysqli_query($conectar, $sql) or die(mysqli_error($conectar));
			$linha = mysqli_num_rows($resultado);
			
			return $linha;
		
		}
		
		public function insere($nome, $idade){

			$obj_con = new conexaobd();
			$conectar = $obj_con->con();

			$sqlinsert = "INSERT INTO cliente (nomeCliente, idadeCliente) VALUES ('".$nome."', ".$idade.");";

			$resultado = mysqli_query($conectar, $sqlinsert) or die (mysqli_error($conectar));

		}
		
		public function deletar($id){

			$obj_con = new conexaobd();
			$conectar = $obj_con->con();

			$sqldelete = "DELETE FROM cliente WHERE idCliente=".$id;

			$resultado = mysqli_query($conectar, $sqldelete) or die (mysqli_error($conectar));

		}
		
		function atualizar($nome, $idade, $id){
			$resultado = true;
			
			$obj_con = new conexaobd();
			$conectar = $obj_con->con();
			
			$sqlupdate = "UPDATE cliente set nomeCliente = '".$nome."', idadeCliente = ".$idade." WHERE idCliente = ".$id;
			
			$resultado = mysqli_query($conectar,$sqlupdate) or die ($resultado = false);
		
		}

	}
?>