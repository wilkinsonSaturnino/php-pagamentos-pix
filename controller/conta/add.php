<?php

include '../../resources/db/conexao.php';

$id_cliente = $_POST['id_cliente'];
$numero_conta = $_POST['numero_conta'];
$digito = $_POST['digito'];
$numero_agencia = $_POST['numero_agencia'];
$select_tipo_conta = $_POST['select_tipo_conta'];

$query = "INSERT INTO CONTA(digito, numero_agencia, numero_conta, tipo_conta, pessoa_id) VALUES($digito, $numero_agencia, $numero_conta, '$select_tipo_conta', $id_cliente)";
mysqli_query($conexao, $query);
header('location:../../index.php?pagina=conta_list');
