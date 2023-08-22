<?php if (!isset($_GET['id_cliente_edit'])) { ?>

	<h1>Inserir novo cliente</h1>
	<form method="post" action="controller/processa_cliente.php">
		<br>
		<label class="badge badge-secondary">Nome:</label><br>
		<input class="form-control" type="text" name="nome" placeholder="Insira o nome do cliente">
		<br><br>
		<label class="badge badge-secondary">CPF:</label><br>
		<input class="form-control" type="text" name="cpf" placeholder="Insira o CPF (somente números)"><br>

		<input type="button" class="btn btn-danger" value="Cancelar" onclick="location.href='index.php?pagina=clientes'">
		<input type="submit" class="btn btn-success" value="Inserir">
	</form>

<?php } else {
	include 'resources/db/db_select.php'; ?>
	<?php while ($linha = mysqli_fetch_array($consulta_clientes)) { ?>
		<?php if ($linha['id'] == $_GET['id_cliente_edit']) { ?>
			<h1>Editar cliente</h1>
			<form method="post" action="edita_cliente.php">
				<input type="hidden" name="id_cliente" value="<?php echo $linha['id']; ?>">
				<br>
				<label class="badge badge-secondary">Nome:</label><br>
				<input class="form-control" type="text" name="nome" placeholder="Altere o nome do cliente" value="<?php echo $linha['nome']; ?>">
				<br><br>
				<label class="badge badge-secondary">CPF:</label><br>
				<input class="form-control" type="text" name="cpf" placeholder="Altere o CPF (somente números)" value="<?php echo $linha['cpf']; ?>"><br>
				<input type="button" class="btn btn-danger" value="Cancelar" onclick="location.href='index.php?pagina=clientes'">
				<input class="btn btn-success" type="submit" value="Salvar">
			</form>
		<?php } ?>
	<?php } ?>
<?php } ?>