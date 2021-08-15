<?php 

//echo $controlador."--";
//echo $accion;

include_once("controladores/controlador_".$controlador.".php");

$objControlador = "controlador".ucfirst($controlador);

$controlador = new $objControlador();

//var_dump(method_exists($controlador, $accion)); para validar si el metodo existe en la clase
$controlador->$accion();


 ?>