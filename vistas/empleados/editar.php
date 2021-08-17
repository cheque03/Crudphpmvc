<div class="card text-primary">
  <div class="card-header">
    Agregar Empleado
  </div>
  <div class="card-body">
    <form action="" method="post">
    	<div class="mb-3">
    		<label for="id" class="form-label">ID: </label>
    		<input readonly type="text" value="<?php echo $empleado->id ?>" class="form-control" name="id" id="id" placeholder="ID">
    	</div>
    	<div class="mb-3">
    		<label for="nombre" class="form-label">Nombre: </label>
    		<input type="text" required value="<?php echo $empleado->nombre ?>" class="form-control" name="nombre" id="nombre" placeholder="Nombre del empleado">
    	</div>
    	<div class="mb-3">
    		<label for="correo" class="form-label">Correo: </label>
    		<input type="text" required value="<?php echo $empleado->correo ?>" class="form-control" name="correo" id="correo" placeholder="Correo del empleado">
    	</div>

     <input type="submit" class="btn btn-success" value="Editar Empleado">
     <a href="?controlador=empleados&accion=inicio" class="btn btn-primary">Cancelar</a>

    </form>
  </div>
  
</div>