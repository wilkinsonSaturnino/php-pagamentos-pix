<?php include 'resources/db/conta.php'; ?>
<?php while ($conta = mysqli_fetch_array($contaListAll)) { ?>
	<?php if ($conta['id'] == $_POST['id_conta']) { ?>
		<h1>Tem certeza que deseja deletar esta conta?</h1>
		<form method="post" action="controller/conta/delete.php">
			<input type="hidden" name="id_conta" value="<?php echo $conta['id']; ?>">
			<br>
			<label class="badge badge-primary">Conta:</label>
			<label class='badge badge-secondary'><?php echo $conta['numero_conta']; ?></label>
			<br>
			<label class="badge badge-primary">Dígito:</label>
			<label class='badge badge-secondary'><?php echo $conta['digito']; ?></label>
			<br>
			<label class="badge badge-primary">Agência:</label>
			<label class='badge badge-secondary'><?php echo $conta['numero_agencia']; ?></label>
			<br>
			<label class="badge badge-primary">Tipo:</label>
			<label class='badge badge-secondary'><?php echo $conta['tipo_conta']; ?></label>
			<br><br>
			<input type="button" class="btn btn-danger" value="Cancelar" onclick="location.href='index.php?pagina=conta_list'">
			<input type="submit" class="btn btn-success" value="Deletar">
		</form>
	<?php } ?>
<?php } ?>