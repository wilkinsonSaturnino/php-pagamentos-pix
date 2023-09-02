<?php

include 'conexao.php';

$queryContaListAll = "SELECT * FROM conta";
$contaListAll = mysqli_query($conexao, $queryContaListAll);

if (isset($_POST['id_conta'])) {
    $id_conta = $_POST['id_conta'];
    $queryContaById = "SELECT * FROM CONTA WHERE id = $id_conta";
    $contaById = mysqli_query($conexao, $queryContaById);
}
