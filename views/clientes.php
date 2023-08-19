<a class="btn btn-success" href="?pagina=inserir_aluno">Inserir novo aluno</a>

<table class="table table-hover table-striped" id="alunos">
	<thead>
		<tr style="text-align: center;">
			<th>Nome aluno</th>
			<th>Data nascimento</th>
			<th>Editar</th>
			<th>Deletar</th>
		</tr>
	</thead>
	<tbody>
		<?php
		include 'db/db_select.php';
		while ($linha = mysqli_fetch_array($consulta_alunos)) {
			echo '<tr><td >' . $linha['nome_aluno'] . '</td>';
			echo '<td>' . $linha['data_nascimento'] . '</td>';
		?>
			<td style="text-align: center;">
				<a href="?pagina=inserir_aluno&editar=<?php echo $linha['id_aluno']; ?>">
					<i class="fa-solid fa-user-pen"></i>
				</a>
			</td>
			<td style="text-align: center;">
				<a href="deleta_aluno.php?id_curso=<?php echo $linha['id_aluno']; ?>">
					<i class="fa-solid fa-trash"></i>
				</a>
			</td>
			</tr>

		<?php
		}
		?>
	</tbody>

</table>