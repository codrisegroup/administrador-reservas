<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Editar Reserva</title>
<?php 
include('../header.php');
include('../includes/clases/Reserva.php');

$reserva = new Reserva();
 ?>
</head>
<body>
<div class="container-fluid">
<div class="row">

<div class="col-md-3">
<div class="panel panel-success">
<div class="panel-heading">
<h3 class="panel-title">
<b>
Reserva # <?php echo $_GET['id'] ?>
</b>
</h3>
</div>
<div class="panel-footer">
<strong>
SOLICITANTE: <?php echo $reserva -> MostrarAtributo($_GET['id'],'TDESCRI'); ?>
</strong>
</div>
<div class="panel-footer">
<strong>
OT: <?php echo $reserva -> MostrarAtributo($_GET['id'],'OT'); ?>
</strong>
</div>
<div class="panel-footer">
<strong>
CC: <?php echo $reserva -> MostrarAtributo($_GET['id'],'CENTROCOSTO'); ?>
</strong>
</div>
<div class="panel-footer">
<strong>
FECHA: <?php echo $reserva -> MostrarAtributo($_GET['id'],'FECHA'); ?>
</strong>
</div>
<div class="panel-footer">
<strong>
HORA: <?php echo $reserva -> MostrarAtributo($_GET['id'],'HORA'); ?>
</strong>
</div>
<div class="panel-footer">
<strong>
ESTADO: <?php echo $reserva -> MostrarAtributo($_GET['id'],'ESTADOS'); ?>
</strong>
</div>
<div class="panel-footer">
<strong>
REQUERIMIENTO: <?php echo $reserva -> MostrarAtributo($_GET['id'],'REQUERIMIENTO'); ?>
</strong>
</div>

</div>	
</div>

<div class="col-md-9">
<?php include('../grid/reserva.php'); ?>
</div>
</div>
</div>
</body>
</html>