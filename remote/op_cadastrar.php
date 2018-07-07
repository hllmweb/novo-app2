<?php
header("Access-Control-Allow-Origin: *");

$nome 		= $_POST['nome'];
$email 		= $_POST['email'];
$senha		= $_POST['senha'];

$conexao = mysqli_connect("67.23.238.90:3306", "hugomesq_user", "senha!7", "hugomesq_novoapp2");


$query_select = "SELECT * FROM usuarios WHERE email='{$email}'";
$resultado_conexao = mysqli_query($conexao, $query_select);

$login_existe = mysqli_num_rows($resultado_conexao);

if($login_existe != 0){
	echo "exist";
}else{
	$query_insert = mysqli_query($conexao, "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')");
	if($query_insert){
		echo "success";
	}else{
		echo "error";
	}
}

?>