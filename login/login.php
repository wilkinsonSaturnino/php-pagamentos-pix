<?php

include '../resources/db/conexao.php';

/* Para salvar no banco de dados a senha criptografada
print($_POST['senha']);
$senha = md5($_POST['senha']);
print("<br>");
print($senha);
exit();*/

$usuario = addslashes($_POST['usuario']);
$senha = md5($_POST['senha']);

$query = "SELECT * FROM usuario WHERE usuario = '$usuario' and senha = '$senha'";
$consulta = mysqli_query($conexao, $query);

if (mysqli_num_rows($consulta) == 1) {
    session_start();
    $_SESSION['login'] = true;
    $_SESSION['usuario'] = $usuario;
    header('location:../index.php');
} else {
    header('location:../index.php?erro');
}
