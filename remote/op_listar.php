<?php
header("Access-Control-Allow-Origin: *");
$conexao = mysqli_connect("67.23.238.90:3306", "hugomesq_user", "senha!7", "hugomesq_novoapp2");


$dados = array();
$query_listar = "SELECT * FROM usuarios ORDER BY nome DESC";
$resultado_conexao = mysqli_query($conexao, $query_listar);

while($linha = mysqli_fetch_object($resultado_conexao)){
	$dados[] =  $linha;
}
echo json_encode($dados);
?>