<h1 style="text-align:center">Clientes</h1>
<a class="btn btn-success" href="?pagina=cliente_add">Inserir novo cliente</a><br /><br />
<table class="table table-hover table-striped" id="clientes">
	<thead>
		<tr style="text-align: center;">
			<th>Nome</th>
			<th>CPF</th>
			<th>Editar</th>
			<th>Deletar</th>
		</tr>
	</thead>
	<tbody>
		<?php
		include 'resources/db/db_select.php';
		while ($linha = mysqli_fetch_array($consulta_clientes)) {
			echo '<tr style="text-align: center;"><td>' . $linha['nome'] . '</td>';
			echo '<td>' . $linha['cpf'] . '</td>';
		?>
			<td style="text-align: center;">
				<form method="post" action="?pagina=cliente_edit">
					<input type="hidden" name="id_cliente" value="<?php echo $linha['id']; ?>">
					<button type="submit" class="btn fa-solid fa-user-pen"></button>
				</form>
			</td>
			<td style="text-align: center;">
				<form method="post" action="?pagina=cliente_delete">
					<input type="hidden" name="id_cliente" value="<?php echo $linha['id']; ?>">
					<button type="submit" class="btn fa-solid fa-trash"></button>
				</form>
			</td>
			</tr>
		<?php
		}
		?>
	</tbody>
</table>