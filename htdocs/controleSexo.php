<?php

require_once($_SERVER["DOCUMENT_ROOT"]."../conexaobd.php");

class Sexo{

public function mostra(){

$obj_con = new conexaobd();
$conectar = $obj_con->con();

$sql = "SELECT * FROM sexo";
 
$resultado = mysqli_query($conectar, $sql);
$r = 0;

while($dados = mysqli_fetch_assoc($resultado)){

$linha[$r]['idSexo']     = $dados['idSexo'];
$linha[$r]['descriSexo'] = $dados['descriSexo'];

$r++;

}
return $linha;
}
}

?>