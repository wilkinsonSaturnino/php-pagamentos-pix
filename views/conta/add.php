<?php include 'resources/db/cliente.php'; ?>
<h1>Inserir conta</h1><br>
<?php while ($cliente = mysqli_fetch_array($clienteById)) { ?>
	<label class="badge badge-info">Cliente:</label>
	<label class='badge badge-light'><?php echo $cliente['nome']; ?></label>
<?php } ?>

<form method="post" action="controller/conta/add.php">
	<br>
	<input type="hidden" name="id_cliente" value="<?php echo $_POST['id_cliente']; ?>">
	<label class="badge badge-primary">Conta:</label><br>
	<input class="form-control" type="text" name="numero_conta" placeholder="Insira o número da conta">
	<br>
	<label class="badge badge-primary">Dígito:</label><br>
	<input class="form-control" type="text" name="digito" placeholder="Insira o dígito">
	<br>
	<label class="badge badge-primary">Agência:</label><br>
	<input class="form-control" type="text" name="numero_agencia" placeholder="Insira o número da agência">
	<br>
	<label class="badge badge-primary">Tipo:</label><br>
	<select class="form-control" name="select_tipo_conta">
		<option>Selecione um tipo de conta</option>
		<option value="CONTA-CORRENTE">CONTA-CORRENTE</option>
		<option value="CONTA-POUPANÇA">CONTA-POUPANÇA</option>
		<option value="CONTA-SALÁRIO">CONTA-SALÁRIO</option>
	</select>
	<br>
	<input type="button" class="btn btn-danger" value="Cancelar" onclick="location.href='index.php?pagina=cliente_list'">
	<input type="submit" class="btn btn-success" value="Inserir">
</form>