<?php

include 'conexao.php';

$queryPagamentoListAll = "SELECT * FROM pagamento";
$pagamentoListAll = mysqli_query($conexao, $queryPagamentoListAll);
