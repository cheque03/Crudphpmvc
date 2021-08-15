<?php 

include_once("conexion.php");

BD::crearInstancia();

class ControladorEmpleados 
{
	
	public function inicio()
	{
		include_once("vistas/empleados/inicio.php");
	}

	public function crear()
	{
		if ($_POST) {
			print_r($_POST);
		}
		include_once("vistas/empleados/crear.php");
	}

	public function editar()
	{
		include_once("vistas/empleados/editar.php");
	}
}

 ?>