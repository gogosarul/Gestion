<div class="row">
	<div class="col-sm-9"><h2>Listado de categorías</h2></div>
	<div class="col-sm-3">
		<a href="tareas">
			<button type="button" class="btn btn-primary add"><span class="glyphicon glyphicon-arrow-left"></span> Volver</button>
		</a>
	</div>
</div>

<div class="row">
	<div class="col-sm-12">
		<table class="table">
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>Acción</th>
			</tr>
		<?php foreach ($categorias as $categoria): ?>
			<tr>
				<td><?php echo $categoria['id']; ?></td>
				<td><?php echo $categoria['nombre']; ?></td>
				<td><a href="categorias/edit/<?php echo $categoria['id']; ?>">Editar</a> | 
					<a href="categorias/delete/<?php echo $categoria['id']; ?>">Eliminar</a></td>
			</tr>
		<?php endforeach; ?>
		</table>
	</div>
</div>