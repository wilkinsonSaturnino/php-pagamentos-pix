<?php

include '../../resources/db/conexao.php';

$id_conta = $_POST['id_conta'];
$query = "DELETE FROM CONTA WHERE id = $id_conta";
mysqli_query($conexao, $query);
header('location:../../index.php?pagina=conta_list');
