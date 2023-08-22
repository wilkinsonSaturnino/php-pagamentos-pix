<a class="btn btn-success" href="?pagina=inserir_conta">Inserir nova conta</a><br /><br />
<table class="table table-hover table-striped" id="contas">
	<thead>
		<tr style="text-align: center;">
			<th>Conta</th>
			<th>Dígito</th>
			<th>Agência</th>
			<th>Tipo</th>
			<th>Cliente</th>
			<th>Editar</th>
			<th>Deletar</th>
		</tr>
	</thead>

	<tbody>
		<?php
		include 'resources/db/db_select.php';
		while ($linha = mysqli_fetch_array($consulta_contas)) {
			echo '<tr style="text-align: center;"><td>' . $linha['numero_conta'] . '</td>';
			echo '<td>' . $linha['digito'] . '</td>';
			echo '<td>' . $linha['numero_agencia'] . '</td>';
			echo '<td>' . $linha['tipo_conta'] . '</td>';
			echo '<td>' . $linha['pessoa_id'] . '</td>';
		?>
			<td style="text-align: center;">
				<a href="?pagina=inserir_conta&id_conta_edit=<?php echo $linha['id']; ?>">
					<i class="fa-solid fa-user-pen"></i>
				</a>
			</td>
			<td style="text-align: center;">
				<a href="../controller/deleta_conta.php?id_conta_delete=<?php echo $linha['id']; ?>">
					<i class="fa-solid fa-trash"></i>
				</a>
			</td>
			</tr>

		<?php
		}
		?>
	</tbody>

</table>