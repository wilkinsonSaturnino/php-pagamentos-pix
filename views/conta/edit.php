<?php include 'resources/db/conta.php'; ?>
<?php while ($conta = mysqli_fetch_array($contaListAll)) { ?>
	<?php if ($conta['id'] == $_POST['id_conta']) { ?>
		<h1>Editar conta</h1>
		<form method="post" action="controller/conta/edit.php">
			<input type="hidden" name="id_conta" value="<?php echo $conta['id']; ?>">
			<label class="badge badge-primary">Conta:</label><br>
			<input class="form-control" type="text" name="numero_conta" value="<?php echo $conta['numero_conta']; ?>">
			<br>
			<label class="badge badge-primary">Dígito:</label><br>
			<input class="form-control" type="text" name="digito" value="<?php echo $conta['digito']; ?>">
			<br>
			<label class="badge badge-primary">Agência:</label><br>
			<input class="form-control" type="text" name="numero_agencia" value="<?php echo $conta['numero_agencia']; ?>">
			<br>
			<label class="badge badge-primary">Tipo:</label><br>
			<select class="form-control" name="select_tipo_conta">
				<option>Selecione um tipo de conta</option>
				<option value="CONTA-CORRENTE">CONTA-CORRENTE</option>
				<option value="CONTA-POUPANÇA">CONTA-POUPANÇA</option>
				<option value="CONTA-SALÁRIO">CONTA-SALÁRIO</option>
			</select>
			<br>
			<input type="button" class="btn btn-danger" value="Cancelar" onclick="location.href='index.php?pagina=conta_list'">
			<input class="btn btn-success" type="submit" value="Salvar">
		</form>
	<?php } ?>
<?php } ?>