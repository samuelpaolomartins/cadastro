<?php

class conexaobd{
	
	public function con(){
		$conectar = mysqli_connect("localhost","root","","loja_cliente") or die(mysql_error());
		//seleciona o banco
		mysqli_select_db($conectar,"loja_cliente")or die(mysql_error());
		
		return $conectar;  
	}
}
?>