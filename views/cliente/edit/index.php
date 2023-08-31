<?php include 'resources/db/db_select.php'; ?>
<?php while ($linha = mysqli_fetch_array($consulta_clientes)) { ?>
	<?php if ($linha['id'] == $_POST['id_cliente']) { ?>
		<h1>Editar cliente</h1>
		<form method="post" action="controller/cliente/edit/index.php">
			<input type="hidden" name="id_cliente" value="<?php echo $linha['id']; ?>">
			<br>
			<label class="badge badge-secondary">Nome:</label><br>
			<input class="form-control" type="text" name="nome" value="<?php echo $linha['nome']; ?>">
			<br><br>
			<label class="badge badge-secondary">CPF:</label><br>
			<input class="form-control" type="text" name="cpf" value="<?php echo $linha['cpf']; ?>"><br>
			<input type="button" class="btn btn-danger" value="Cancelar" onclick="location.href='index.php?pagina=cliente_list'">
			<input class="btn btn-success" type="submit" value="Salvar">
		</form>
	<?php } ?>
<?php } ?>