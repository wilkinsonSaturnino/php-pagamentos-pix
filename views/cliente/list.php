<h1 style="text-align:center">Clientes</h1>
<a class="btn btn-success" href="?pagina=cliente_add">Inserir novo cliente</a><br /><br />
<table class="table table-hover table-striped" id="clientes">
	<thead>
		<tr style="text-align: center;">
			<th>Nome</th>
			<th>CPF</th>
			<th colspan="3">Opções</th>
		</tr>
	</thead>
	<tbody>
		<?php include 'resources/db/cliente.php'; ?>
		<?php while ($cliente = mysqli_fetch_array($clienteListAll)) { ?>
			<tr style="text-align: center;">
				<td><?php echo $cliente['nome']; ?></td>
				<td><?php echo $cliente['cpf']; ?></td>
				<td>
					<form method="post" action="?pagina=cliente_edit">
						<input type="hidden" name="id_cliente" value="<?php echo $cliente['id']; ?>">
						<button type="submit" class="btn fa-solid fa-user-pen" title="Editar"></button>
					</form>
				</td>
				<td>
					<form method="post" action="?pagina=cliente_delete">
						<input type="hidden" name="id_cliente" value="<?php echo $cliente['id']; ?>">
						<button type="submit" class="btn fa-solid fa-trash" title="Deletar"></button>
					</form>
				</td>
				<td>
					<form method="post" action="?pagina=conta_add">
						<input type="hidden" name="id_cliente" value="<?php echo $cliente['id']; ?>">
						<button type="submit" class="btn fa-solid fa-address-card" title="Criar conta"></button>
					</form>
				</td>
			</tr>
		<?php }	?>
	</tbody>
</table>