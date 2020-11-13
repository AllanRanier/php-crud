<?php
include 'conexao.php';

$nrolivro = $_POST['nrolivro'];
$nomelivro = $_POST['nomelivro'];
$genero = $_POST['genero'];
$autor = $_POST['autor'];

$sql = "INSERT INTO `estoque`(`nrlivro`, `nomelivro`, `genero`, `autor`) VALUES ($nrolivro,'$nomelivro','$genero','$autor')";
$inserir = mysqli_query($conexao,$sql);
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<div class="container" style="width: 500px; margin-top: 20px">
<script>
	alert('Livro adicionado com sucesso!'); location= './adicionar_produto.php';
	</script>"
</div>