<?php include 'resources/db/cliente.php'; ?>
<?php while ($cliente = mysqli_fetch_array($clienteListAll)) { ?>
	<?php if ($cliente['id'] == $_POST['id_cliente']) { ?>
		<h1>Tem certeza que deseja deletar este cliente?</h1>
		<form method="post" action="controller/cliente/delete.php">
			<input type="hidden" name="id_cliente" value="<?php echo $cliente['id']; ?>">
			<br>
			<label class="badge badge-primary">Nome:</label>
			<label class='badge badge-secondary'><?php echo $cliente['nome']; ?></label>
			<br>
			<label class="badge badge-primary">CPF:</label>
			<label class='badge badge-secondary'><?php echo $cliente['cpf']; ?></label>
			<br><br>
			<input type="button" class="btn btn-danger" value="Cancelar" onclick="location.href='index.php?pagina=cliente_list'">
			<input type="submit" class="btn btn-success" value="Deletar">
		</form>
	<?php } ?>
<?php } ?>