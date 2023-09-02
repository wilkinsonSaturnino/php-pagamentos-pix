<?php

# Iniciar sessão
session_start();

# Base de dados
include 'resources/db/conexao.php';

# Cabeçalho
include 'header.php';

# Conteúdo da página
include 'conteudo.php';

switch ($pagina) {
	case 'cliente_list':
		include 'views/cliente/list.php';
		break;
	case 'cliente_add':
		include 'views/cliente/add.php';
		break;
	case 'cliente_edit':
		include 'views/cliente/edit.php';
		break;
	case 'cliente_delete':
		include 'views/cliente/delete.php';
		break;
	case 'conta_list':
		include 'views/conta/list.php';
		break;
	case 'conta_add':
		include 'views/conta/add.php';
		break;
	case 'conta_edit':
		include 'views/conta/edit.php';
		break;
	case 'conta_delete':
		include 'views/conta/delete.php';
		break;
	default:
		include 'home.php';
		break;
}

# Rodapé
include 'footer.php';
