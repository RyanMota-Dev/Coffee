<?php
include 'conexao.php';

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$conf_senha = $_POST["conf_senha"];


if ($senha != $conf_senha) {
    echo "As senhas não coincidem";
    exit();
}

$sql = "INSERT INTO contas (Nome, Email, Senha) VALUES('$nome', '$email', '$senha')";
$resultado = mysql_query($sql);

if ($resultado) {
    header("Location: index.html");
    exit();
} else {
    echo "Erro ao registrar a conta" .mysql_error();
}
?>