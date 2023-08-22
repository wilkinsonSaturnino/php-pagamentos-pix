<?php

include 'resources/db/db_conexao.php';

$query = "SELECT * FROM pessoa";
$consulta_clientes = mysqli_query($conexao, $query);

$query = "SELECT * FROM pagamento";
$consulta_pagamentos = mysqli_query($conexao, $query);

$query = "SELECT * FROM conta";
$consulta_contas = mysqli_query($conexao, $query);
