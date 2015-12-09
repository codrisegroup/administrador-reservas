<?php 
include('../includes/bd/conexion.php');
include('../includes/clases/Usuario.php');

$usuario = new Usuario();


if ($_REQUEST['tipo']=='registrar') 
{
	$usuario ->Registrar($_POST['nombres'],$_POST['apellidos'],$_POST['dni'],
		$_POST['starsoft'],$_POST['tipousuario'],$_POST['area']);
}
else if ($_REQUEST['tipo']=='actualizar') 
{
	$usuario ->Actualizar($_POST['idusuario'],$_POST['nombres'],$_POST['apellidos'],
		$_POST['dni'],$_POST['starsoft'],$_POST['tipousuario'],$_POST['area']);
}
else
{
 echo "no existe el tipo";
}


 ?>