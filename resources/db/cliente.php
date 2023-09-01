<?php

include 'conexao.php';

$queryClienteListAll = "SELECT * FROM pessoa";
$clienteListAll = mysqli_query($conexao, $queryClienteListAll);

if (isset($_POST['id_cliente'])) {
    $id_cliente = $_POST['id_cliente'];
    $queryClienteById = "SELECT * FROM PESSOA WHERE id = $id_cliente";
    $clienteById = mysqli_query($conexao, $queryClienteById);
}
