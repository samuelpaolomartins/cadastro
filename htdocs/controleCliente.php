<?php

require_once($_SERVER["DOCUMENT_ROOT"]."../conexaobd.php");

class Cliente{

public function busca($id = false){

$obj_con = new conexaobd();
$conectar = $obj_con->con();

$sql = "SELECT * FROM cliente";

if($id == true){

$sql .= " WHERE idCliente = ".$id;
}

$resultado = mysqli_query($conectar, $sql);
$r = 0;

while($dados = mysqli_fetch_assoc($resultado)){

$linha[$r]['idCliente'] = $dados['idCliente'];
$linha[$r]['nomeCliente'] = $dados['nomeCliente'];
$linha[$r]['idadeCliente'] = $dados['idadeCliente'];
$r++;

}
return $linha;
}

}

?>
