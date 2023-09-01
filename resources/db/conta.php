<?php

include 'conexao.php';

$queryContaListAll = "SELECT * FROM conta";
$contaListAll = mysqli_query($conexao, $queryContaListAll);
