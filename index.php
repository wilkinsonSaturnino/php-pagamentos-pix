<?php

# Iniciar sessão
session_start();

# Base de dados
include 'resources/db/db_conexao.php';

# Cabeçalho
include 'header.php';

# Conteúdo da página
include 'conteudo.php';

switch ($pagina) {
	case 'cliente_list':
		include 'views/cliente/list/index.php';
		break;
	case 'cliente_add':
		include 'views/cliente/add/index.php';
		break;
	case 'cliente_edit':
		include 'views/cliente/edit/index.php';
		break;
	case 'cliente_delete':
		include 'views/cliente/delete/index.php';
		break;
	case 'pagamentos':
		include 'views/pagamento/list/index.php';
		break;
	case 'contas':
		include 'views/conta/list/index.php';
		break;
	case 'conta_add':
		include 'views/conta/add/index.php';
		break;
	case 'pagamento_add':
		include 'views/pagamento/add/index.php';
		break;
	default:
		include 'home.php';
		break;
}

# Rodapé
include 'footer.php';
