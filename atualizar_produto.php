<?php

include 'conexao.php';

$id = $_POST['id'];
//$nrprodutos = $_POST['nrlivro'];
$nomelivro = $_POST['nomelivro'];
$genero = $_POST['genero'];
$autor = $_POST['autor'];

$sql = "UPDATE `estoque` SET `nomelivro`='$nomelivro',`genero`='$genero',`autor`='$autor' WHERE id_estoque = $id";
$atualizar = mysqli_query($conexao,$sql);


if($atualizar){
	echo "<script>alert('Atualizados com sucesso!'); location= './listar_produtos.php';</script>";
}else{
	echo "<script>alert('Erro!'); location= './listar_produtos.php';</script>";
}

?>