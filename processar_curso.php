<?php
include 'conexao.php';

$titulo = mysql_real_escape_string($_POST['courseTitle']);
$descricao = mysql_real_escape_string($_POST['courseDescription']);
$duracao = mysql_real_escape_string($_POST['courseDuration']);
$nivel = mysql_real_escape_string($_POST['courseLevel']);
$categoria = mysql_real_escape_string($_POST['courseCategory']);


$sql = "INSERT INTO cursos (titulo, descricao, duracao, nivel, categoria) 
        VALUES ('$titulo', '$descricao', '$duracao', '$nivel', '$categoria')";

if (mysql_query($sql)) {
    header("Location: cursos.php?status=success");
    exit();
} else {
  
    die("Erro ao inserir curso: " . mysql_error());
}
mysql_close();
?>
