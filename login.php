<?php 
include 'conexao.php';

if(isset($_POST['usuario'])){   
    $usuario = $_POST['usuario'];
    $senhausuario = $_POST['senha'];

    $sql = "SELECT * FROM usuario WHERE nome_usuario = '$usuario' and senha_usuario = '$senhausuario'";
    $resultado = mysqli_query($conexao,$sql);

    if(mysqli_num_rows($resultado) == 1){

        session_start();
        $_SESSION['usuario'] = $usuario;
        
        header('location: /menu.php');
    }else{
        echo "<script>alert('Usuário e senha incorretos!'); location= './index.php';</script>";
    }
   
}



