<?php 
include('../includes/bd/conexion.php');
include('../includes/clases/Reserva.php');

$reserva = new Reserva();

if ($_REQUEST['tipo']=='actualizar') 
{
$reserva ->ActualizarCantidad($_POST['reserva'],$_POST['idreserva'],$_POST['cantidad'],	$_POST['clase']);
}

else if ($_REQUEST['tipo']=='eliminaritem') 
{
$reserva ->EliminarItem($_POST['reserva'],$_POST['idreserva'],$_POST['clase']);
}

else if ($_REQUEST['tipo']=='trasladaritem') 
{
$reserva ->TrasladarItem($_POST['reservaoriginal'],$_POST['reservanueva'],$_POST['codigo'],$_POST['cantidad'],
	$_POST['clase']);
}


else
{
 echo "no existe el tipo";
}


 ?>