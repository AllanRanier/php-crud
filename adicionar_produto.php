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
  <title>Cadastro</title>

</head>

<body>
  <div class="container" id="tamanhoContainer">
    <div style="text-align: right;">
      <a href="menu.php" role="button" class="btn btn-small btn-primary">Voltar</a>
    </div>
    <h4>Formulário de Cadastro</h4>
    <form action="inserir_produto.php" method="POST" style="margin-top: 20px;">
      <div class="form-group">
        <label>Nro do Livro</label>
        <input type="number" class="form-control" name="nrolivro" placeholder="Numero do livro" autocomplete="off" required>
      </div>
      <div class="form-group">
        <label>Nome do Livro</label>
        <input type="text" class="form-control" name="nomelivro" placeholder="Nome do livro" autocomplete="off" required>
      </div>
      <div class="form-group">
        <label>Gênero</label>
        <input type="text" class="form-control" name="genero" placeholder="Gênero do livro" autocomplete="off" required>
      </div>
      <div class="form-group">
        <label>Autor</label>
        <input type="text" class="form-control" name="autor" placeholder="Autor do livro" autocomplete="off" required>
      </div>
      <div style="text-align: right;">
        <button type="submit" id="botao" class="btn btn-small">Cadastrar</button>
      </div>
    </form>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</html>