<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/111db99c8a.js" crossorigin="anonymous"></script>
    <title>Listagem de Produtos</title>

</head>

<body>

<?php
session_start();
$usuario = $_SESSION['usuario'];


if(!isset($_SESSION['usuario'])){
    header('Location: index.php');
}

?>

    <div class="container" style="margin-top: 40px;">
        <div style="text-align: right;">
            <a href="menu.php" role="button" class="btn btn-small btn-primary">Voltar</a>
        </div>
        <h3>Lista dos Livros</h3>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nro Livro</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Gênero</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <?php
            include 'conexao.php';
            $sql = "SELECT * FROM estoque";
            $busca = mysqli_query($conexao, $sql);

            if (mysqli_num_rows($busca) > 0) {
                while ($linha = mysqli_fetch_assoc($busca)) {
                    $id_estoque = $linha["id_estoque"];
                    $nrprodutos = $linha["nrlivro"];
                    $nomelivro = $linha["nomelivro"];
                    $genero = $linha["genero"];
                    $autor = $linha["autor"];


            ?>
                    <tr>
                        <td><?php echo $linha["nrlivro"]; ?></td>
                        <td><?php echo $linha['nomelivro']; ?></td>
                        <td><?php echo $linha['genero']; ?></td>
                        <td><?php echo $linha['autor']; ?></td>
                        <td><a class="btn btn-warning btn-sm" style="color: #fff" href="editar_produto.php?id=<?php echo $id_estoque ?>" role="button"><i class="fas fa-edit"></i>  Editar</a>
                            <a class="btn btn-danger btn-sm" style="color: #fff" href="deletar_produto.php?id=<?php echo $id_estoque ?>" role="button"><i class="fas fa-trash-alt"></i>  Excluir</a>
                        </td>
                    </tr>
            <?php }
            }
            ?>

        </table>

    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</html>