<?php
foreach ($estudiantes as $estudiante) {
	?>
	<tr>
		<td><?= $estudiante->id ?></td>
		<td><?= $estudiante->nombre ?></td>
		<td><?= $estudiante->apellido ?></td>
		<td><button class="btnEditar" value="<?= $estudiante->id ?>">Editar</button></td>
		<td><button class="btnEliminar" value="<?= $estudiante->id ?>">Eliminar</button></td>
	</tr>
	<?php
}