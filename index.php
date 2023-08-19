<?php

# Iniciar sessão
session_start();

# Base de dados
include 'resources/db/db_conexao.php';

# Cabeçalho
include 'header.php';

# Conteúdo da página
if (isset($_SESSION['login'])) {
	if (isset($_GET['pagina'])) {
		$pagina = $_GET['pagina'];
	} else {
		$pagina = 'pagamentos';
	}
} else {
	$pagina = 'home';
}

switch ($pagina) {
	case 'pagamentos':
		include 'views/pagamentos.php';
		break;
	case 'contas':
		include 'views/contas.php';
		break;
	case 'clientes':
		include 'views/clientes.php';
		break;
	case 'inserir_cliente':
		include 'controller/inserir_cliente.php';
		break;
	case 'inserir_conta':
		include 'controller/inserir_conta.php';
		break;
	case 'inserir_pagamento':
		include 'controller/inserir_pagamento.php';
		break;
	default:
		include 'home.php';
		break;
}

# Rodapé
include 'footer.php';
