<?php

include '../../../resources/db/db_conexao.php';

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$query = "INSERT INTO PESSOA(nome, cpf) VALUES('$nome', '$cpf')";
mysqli_query($conexao, $query);
header('location:../../../index.php?pagina=cliente_list');
