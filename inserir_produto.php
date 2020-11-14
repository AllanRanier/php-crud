<?php
include 'conexao.php';

$nrolivro = $_POST['nrolivro'];
$nomelivro = $_POST['nomelivro'];
$genero = $_POST['genero'];
$autor = $_POST['autor'];

$sql = "INSERT INTO `estoque`(`nrlivro`, `nomelivro`, `genero`, `autor`) VALUES ($nrolivro,'$nomelivro','$genero','$autor')";
$inserir = mysqli_query($conexao,$sql);

if($inserir){
	echo "<script>alert('Cadastrado com sucesso!'); location= './adicionar_produto.php';</script>";
}else{
	echo "<script>alert('Erro ao cadastrar!'); location= './adicionar_produto.php';</script>";
}

?>