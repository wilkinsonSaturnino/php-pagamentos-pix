<?php include 'resources/db/db_select.php'; ?>
<?php while ($linha = mysqli_fetch_array($consulta_clientes)) { ?>
	<?php if ($linha['id'] == $_POST['id_cliente']) { ?>
		<h1>Tem certeza que deseja deletar este cliente?</h1>
		<form method="post" action="controller/cliente/delete/index.php">
			<input type="hidden" name="id_cliente" value="<?php echo $linha['id']; ?>">
			<br>
			<label class="badge badge-secondary">Nome:</label>
			<label class='badge badge-primary'><?php echo $linha['nome']; ?></label>
			<br>
			<label class="badge badge-secondary">CPF:</label>
			<label class='badge badge-primary'><?php echo $linha['cpf']; ?></label>
			<br><br>
			<input type="button" class="btn btn-danger" value="Cancelar" onclick="location.href='index.php?pagina=cliente_list'">
			<input type="submit" class="btn btn-success" value="Deletar">
		</form>
	<?php } ?>
<?php } ?>