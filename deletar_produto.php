<?php
include 'conexao.php';
$id = $_GET['id'];
$sql = "DELETE FROM `estoque` WHERE id_estoque = $id";
$deletar = mysqli_query($conexao,$sql);

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<div class="container" style="width: 400px;">
<script>
	alert('Deletado com sucesso!'); location= './listar_produtos.php';
	</script>"
</div>