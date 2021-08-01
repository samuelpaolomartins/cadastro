<?php
$nome = $_POST['nome'];
$idade = $_POST['idade'];

$con = mysqli_connect('localhost', 'root', '', 'ajax');

$sql = "INSERT INTO aluno (idAluno, nomeAluno, idadeAluno) VALUES(NULL, '".$nome."', ".$idade.")";

$res = mysqli_query($con, $sql);
?>