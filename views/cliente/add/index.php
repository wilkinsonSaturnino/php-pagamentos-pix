<h1>Inserir novo cliente</h1>
<form method="post" action="controller/cliente/add/index.php">
	<br>
	<label class="badge badge-secondary">Nome:</label><br>
	<input class="form-control" type="text" name="nome" placeholder="Insira o nome do cliente">
	<br>
	<label class="badge badge-secondary">CPF:</label><br>
	<input class="form-control" type="text" name="cpf" placeholder="Insira o CPF (somente números)"><br>

	<input type="button" class="btn btn-danger" value="Cancelar" onclick="location.href='index.php?pagina=cliente_list'">
	<input type="submit" class="btn btn-success" value="Inserir">
</form>