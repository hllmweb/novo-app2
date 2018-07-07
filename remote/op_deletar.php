<?php 
header("Access-Control-Allow-Origin: *");

$conexao = mysqli_connect("67.23.238.90:3306", "hugomesq_user", "senha!7", "hugomesq_novoapp2");

$id		= $_POST['id'];

$query_deletar = "DELETE FROM usuarios WHERE id='$id'";
$resultado_conexao = mysqli_query($conexao, $query_deletar);
if($resultado_conexao){
	echo "success";
}else{
	echo "erro";
}

?>