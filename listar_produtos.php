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

    <div class="container" style="margin-top: 40px;">
        <h3>Lista de Produtos</h3>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nro Livro</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Gênero</th>
                    <th scope="col">Autor</th>
                </tr>
            </thead>
                <?php
                include 'conexao.php';
                $sql = "SELECT * FROM estoque";
                $busca = mysqli_query($conexao, $sql);

                if(mysqli_num_rows($busca) > 0 ){
                while ($linha = mysqli_fetch_assoc($busca)) {
                    $id_estoque = $linha["id_estoque"];

                ?>
                    <tr>
                        <td><?php echo $linha["nrlivro"]; ?></td>
                        <td><?php echo $linha['nomelivro']; ?></td>
                        <td><?php echo $linha['genero']; ?></td>
                        <td><?php echo $linha['autor'];?></td>
                    <?php } 
                    }
                    ?>
                    </tr>

        </table>

    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</html>