<?php include 'resources/db/cliente.php'; ?>
<?php while ($cliente = mysqli_fetch_array($clienteListAll)) { ?>
	<?php if ($cliente['id'] == $_POST['id_cliente']) { ?>
		<h1>Editar cliente</h1>
		<form method="post" action="controller/cliente/edit.php">
			<input type="hidden" name="id_cliente" value="<?php echo $cliente['id']; ?>">
			<br>
			<label class="badge badge-secondary">Nome:</label><br>
			<input class="form-control" type="text" name="nome" value="<?php echo $cliente['nome']; ?>">
			<br><br>
			<label class="badge badge-secondary">CPF:</label><br>
			<input class="form-control" type="text" name="cpf" value="<?php echo $cliente['cpf']; ?>"><br>
			<input type="button" class="btn btn-danger" value="Cancelar" onclick="location.href='index.php?pagina=cliente_list'">
			<input class="btn btn-success" type="submit" value="Salvar">
		</form>
	<?php } ?>
<?php } ?>