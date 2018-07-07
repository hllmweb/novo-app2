<?php
header("Access-Control-Allow-Origin: *");

$email 		= $_POST['email'];
$senha		= $_POST['senha'];

$conexao = mysqli_connect("67.23.238.90:3306", "hugomesq_user", "senha!7", "hugomesq_novoapp2");

//verificando se o usuário está vazio ou existe
$query = "SELECT * FROM usuarios WHERE email='{$email}' AND senha='{$senha}'";
$resultado = mysqli_query($conexao, $query);
$linha = mysqli_fetch_array($resultado);
// echo $linha['nome'];
// exit;

if(mysqli_num_rows($resultado) != 0){
	echo "success,".$linha['nome'];
}else{
	echo "failed";
}

?>