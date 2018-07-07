<?php 
header("Access-Control-Allow-Origin: *");

$conexao = mysqli_connect("67.23.238.90:3306", "hugomesq_user", "senha!7", "hugomesq_novoapp2");

$id		= $_POST['id'];
$nome 	= $_POST['nome'];
$email 	= $_POST['email'];
$senha  = $_POST['senha'];

$query_atualizar = "UPDATE usuarios SET nome='$nome', email='$email', senha='$senha' WHERE id='$id'";
$resultado_conexao = mysqli_query($conexao, $query_atualizar);
if($resultado_conexao){
	echo "success";
}else{
	echo "erro";
}
?>