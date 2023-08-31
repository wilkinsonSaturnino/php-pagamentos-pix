<!DOCTYPE html>
<html>

<head>
	<title>Pagamentos PIX</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="resources/css/bootstrap.min.css">
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="resources/css/estilo.css">
</head>

<body>
	<header>
		<div class="container">
			<a href="?pagina=home"><img src="resources/img/logo-pix.png" title="Início"></a>
			<div id="menu">
				<a href="?pagina=cliente_list">Clientes</a>
				<a href="?pagina=conta_list">Contas</a>
				<a href="?pagina=pagamento_list">Pagamentos</a>
				<?php if (isset($_SESSION['login'])) { ?>
					<a href="login/logout.php">
						<?php echo $_SESSION['usuario']; ?>
						(sair)
					</a>
				<?php } ?>
			</div>
		</div>
	</header>

	<div id="conteudo" class="container">