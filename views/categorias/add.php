<div class="row">
  <div class="col-sm-4"><h2>Nueva categoría</h2></div>
  <div class="col-sm-4"></div>
  <div class="col-sm-4"><br /><a href="tareas"><button type="button" class="btn btn-primary add"><span class="glyphicon glyphicon-arrow-left"></span> Volver a tareas</button></a></div>
</div>

<form action="categorias/add" method="POST" role="form">
	<div class="form-group">
    	<label for="nombre">Nombre de la categoría:</label>
    	<input type="text" class="form-control" id="nombre" name="nombre">
 	</div>
	<button type="submit" class="btn btn-default">Guardar categoría</button>
</form>