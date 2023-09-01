<h1 style="text-align:center">Pagamentos</h1>
<a class="btn btn-success" href="?pagina=pagamento_add">Inserir novo pagamento</a><br /><br />
<table class="table table-hover table-striped" id="pagamentos">
	<thead>
		<tr style="text-align: center;">
			<th>Descrição</th>
			<th>Data Pagamento</th>
			<th>Valor</th>
			<th>Chave PIX</th>
			<th>Editar</th>
			<th>Deletar</th>
		</tr>
	</thead>

	<tbody>
		<?php
		include 'resources/db/db_select.php';
		while ($linha = mysqli_fetch_array($consulta_pagamentos)) {
			echo '<tr style="text-align: center;"><td>' . $linha['descricao'] . '</td>';
			echo '<td>' . $linha['data_pagamento'] . '</td>';
			echo '<td>' . $linha['valor'] . '</td>';
			echo '<td>' . $linha['chave_pix'] . '</td>';
		?>
			<td style="text-align: center;">
				<a href="?pagina=inserir_pagamento&id_pagamento_edit=<?php echo $linha['id']; ?>">
					<i class="fa-solid fa-user-pen"></i>
				</a>
			</td>
			<td style="text-align: center;">
				<a href="controller/deleta_pagamento.php?id_pagamento_delete=<?php echo $linha['id']; ?>">
					<i class="fa-solid fa-trash"></i>
				</a>
			</td>
			</tr>

		<?php
		}
		?>
	</tbody>

</table>