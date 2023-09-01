<h1 style="text-align:center">Contas</h1>
<table class="table table-hover table-striped" id="contas">
	<thead>
		<tr style="text-align: center;">
			<th>Conta</th>
			<th>Dígito</th>
			<th>Agência</th>
			<th>Tipo</th>
			<th>Cliente</th>
			<th colspan="2">Opções</th>
		</tr>
	</thead>
	<tbody>
		<?php include 'resources/db/conta.php'; ?>
		<?php while ($conta = mysqli_fetch_array($contaListAll)) { ?>
			<tr style="text-align: center;">
				<td><?php echo $conta['numero_conta']; ?></td>
				<td><?php echo $conta['digito']; ?></td>
				<td><?php echo $conta['numero_agencia']; ?></td>
				<td><?php echo $conta['tipo_conta']; ?></td>
				<td><?php echo $conta['pessoa_id']; ?></td>
				<td>
					<form method="post" action="?pagina=conta_edit">
						<input type="hidden" name="id_conta" value="<?php echo $conta['id']; ?>">
						<button type="submit" class="btn fa-solid fa-user-pen" title="Editar"></button>
					</form>
				</td>
				<td>
					<form method="post" action="?pagina=conta_delete">
						<input type="hidden" name="id_conta" value="<?php echo $conta['id']; ?>">
						<button type="submit" class="btn fa-solid fa-trash" title="Deletar"></button>
					</form>
				</td>
			</tr>
		<?php }	?>
	</tbody>
</table>