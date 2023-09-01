<?php

include '../../resources/db/conexao.php';

$id_cliente = $_POST['id_cliente'];
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$query = "UPDATE PESSOA SET nome='$nome', cpf='$cpf' WHERE id = $id_cliente";
mysqli_query($conexao, $query);
header('location:../../index.php?pagina=cliente_list');
