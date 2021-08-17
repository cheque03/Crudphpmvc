<?php 


class Empleado 
{
	public $id;
	public $nombre;
	public $correo;

	public function __construct($id, $nombre, $correo)
	{
		$this->id = $id;
		$this->nombre = $nombre;
		$this->correo = $correo;
	}
	

	public static function consultar()
	{
		$listaEmpleados = [];
		$conexion = BD::crearInstancia();

		$sql = $conexion->query("SELECT * FROM empleados_mvc");

		foreach ($sql->fetchAll() as $empleado) {
			$listaEmpleados[] = new Empleado($empleado['id'], $empleado['nombre'], $empleado['correo']); 
		}

		return $listaEmpleados;
	}
	public static function crear($nombre, $correo)
	{
		$conexion = BD::crearInstancia();

		$sql = $conexion->prepare("INSERT INTO empleados_mvc (nombre, correo) VALUES ( ?,?) ");
		$sql->execute(array($nombre,$correo));
	}

	public static function borrar($id)
	{
		$conexion = BD::crearInstancia();

		$sql = $conexion->prepare("DELETE FROM empleados_mvc WHERE id = ?");
		$sql->execute(array($id));
	}

	public static function buscar($id)
	{
		$conexion = BD::crearInstancia();

		$sql = $conexion->prepare("SELECT * FROM empleados_mvc WHERE id = ?");
		$sql->execute(array($id));
		$empleado = $sql->fetch();

		return new Empleado($empleado['id'], $empleado['nombre'], $empleado['correo']);
	}

	public function editar($id,$nombre,$correo)
	{
		$conexion = BD::crearInstancia();

		$sql = $conexion->prepare("UPDATE empleados_mvc SET nombre = ?, correo = ?  WHERE id = ?");
		$sql->execute(array($nombre,$correo,$id));
	}
}

 ?>