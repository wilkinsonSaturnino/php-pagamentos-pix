<?php

include '../../resources/db/conexao.php';

$id_conta = $_POST['id_conta'];
$numero_conta = $_POST['numero_conta'];
$digito = $_POST['digito'];
$numero_agencia = $_POST['numero_agencia'];
$select_tipo_conta = $_POST['select_tipo_conta'];

$query = "UPDATE CONTA SET digito=$digito, numero_agencia=$numero_agencia, numero_conta=$numero_conta, tipo_conta='$select_tipo_conta' WHERE id = $id_conta";
mysqli_query($conexao, $query);
header('location:../../index.php?pagina=conta_list');
