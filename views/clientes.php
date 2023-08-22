<a class="btn btn-success" href="?pagina=inserir_cliente">Inserir novo cliente</a><br /><br />

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
			echo '<tr style="text-align: center;"><td >' . $linha['nome'] . '</td>';
			echo '<td>' . $linha['cpf'] . '</td>';
		?>
			<td style="text-align: center;">
				<a href="?pagina=inserir_cliente&id_cliente_edit=<?php echo $linha['id']; ?>">
					<i class="fa-solid fa-user-pen"></i>
				</a>
			</td>
			<td style="text-align: center;">
				<a href="../controller/deleta_cliente.php?id_cliente_delete=<?php echo $linha['id']; ?>">
					<i class="fa-solid fa-trash"></i>
				</a>
			</td>
			</tr>

		<?php
		}
		?>
	</tbody>

</table>