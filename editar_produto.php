<?php

include 'conexao.php';
$id = $_GET['id'];

?>


<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="/css/editar_style.css">
    <script src="https://kit.fontawesome.com/111db99c8a.js" crossorigin="anonymous"></script>
    <title>Editar produtos</title>

  </head>
  <body>
  <?php
  session_start();
  $usuario = $_SESSION['usuario'];


  if(!isset($_SESSION['usuario'])){
      header('Location: index.php');
  }

  ?>
    <div class="container" id="tamanhoContainer">
    <div style="text-align: right;">
      <a href="listar_produtos.php" role="button" class="btn btn-small btn-primary">Voltar</a>
    </div>
      <h4>Formulário de Edição</h4>
      <form action="atualizar_produto.php" method="POST" style="margin-top: 20px;" >
      <?php 
        $sql = "SELECT * FROM `estoque` WHERE id_estoque = $id";
        $buscar = mysqli_query($conexao,$sql);
        while($linha = mysqli_fetch_assoc($buscar)){
            $id_estoque = $linha["id_estoque"];
            $nrprodutos = $linha["nrlivro"];
            $nomelivro = $linha["nomelivro"];
            $genero = $linha["genero"];
            $autor = $linha["autor"];


      ?>
          <div class="form-group">
              <label>Nro do Livro</label>
              <input type="number" class="form-control" name="nrolivro" value="<?php echo $nrprodutos ?>" disabled>
              <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none;">
          </div>
          <div class="form-group">
              <label>Nome do Livro</label>
              <input type="text" class="form-control" name="nomelivro"  value="<?php echo $nomelivro ?>">
          </div>
          <div class="form-group">
              <label>Gênero</label>
              <input type="text" class="form-control" name="genero"  value="<?php echo $genero ?>">
          </div>
          <div class="form-group">
              <label>Autor</label>
              <input type="text" class="form-control" name="autor"  value="<?php echo $autor ?>">
          </div>
          <div style="text-align: right;">
            <button type="submit" id="botao"class="btn btn-small">Atualizar</button>
          </div>
          <?php } ?>
      </form>
    </div>    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</html>