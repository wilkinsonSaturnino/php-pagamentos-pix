<a class="btn btn-success" href="?pagina=inserir_curso">Inserir novo curso</a>
<table class="table table-hover table-striped" id="cursos">
	<thead>
		<tr style="text-align: center;">
			<th>Nome curso</th>
			<th>Carga horária</th>
			<th>Editar</th>
			<th>Deletar</th>
		</tr>
	</thead>

	<tbody>
		<?php
		include 'db/db_select.php';
		while ($linha = mysqli_fetch_array($consulta_cursos)) {
			echo '<tr><td>' . $linha['nome_curso'] . '</td>';
			echo '<td>' . $linha['carga_horaria'] . '</td>';
		?>
			<td style="text-align: center;">
				<a href="?pagina=inserir_curso&editar=<?php echo $linha['id_curso']; ?>">
					<i class="fa-solid fa-user-pen"></i>
				</a>
			</td>
			<td style="text-align: center;">
				<a href="deleta_curso.php?id_curso=<?php echo $linha['id_curso']; ?>">
					<i class="fa-solid fa-trash"></i>
				</a>
			</td>
			</tr>

		<?php
		}
		?>
	</tbody>

</table>