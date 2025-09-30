<?php
include 'conexao.php';

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['email'];
    $senha = $_POST['senha'];

    $sql ="SELECT * FROM contas WHERE Email ='$usuario' AND Senha = '$senha'";
    $resultado = mysql_query($sql);

    if (mysql_num_rows($resultado) > 0) {
        $_SESSION['email_usuario'] = $usuario;
        
        header("Location: cursos.php");
        exit();
    } else {
        echo "deu erro aí";
             }
    }

?>