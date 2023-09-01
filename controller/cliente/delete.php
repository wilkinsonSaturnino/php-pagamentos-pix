<?php

include '../../resources/db/conexao.php';

$id_cliente = $_POST['id_cliente'];
$query = "DELETE FROM PESSOA WHERE id = $id_cliente";
mysqli_query($conexao, $query);
header('location:../../index.php?pagina=cliente_list');
