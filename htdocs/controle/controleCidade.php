<?php

require_once($_SERVER["DOCUMENT_ROOT"]."../modelo/conexaobd.php");

	class Cidade{

		public function listar(){

			$obj_con = new conexaobd();
			$conectar = $obj_con->con();

			$sql = "SELECT * FROM cidade";
 
			$resultado = mysqli_query($conectar, $sql);
			$r = 0;

			while($dados = mysqli_fetch_assoc($resultado)){

			$linha[$r]['idCidade']   = $dados['idCidade'];
			$linha[$r]['nomeCidade'] = $dados['nomeCidade'];
			 
			$r++;

		}
		return $linha;
	}	
	}

?>