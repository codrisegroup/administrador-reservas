<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Editar Usuario</title>
<?php 
include('../header.php');
include('../includes/clases/Usuario.php');
$usuario = new Usuario();
$idarea=$usuario->MostrarAtributo($_GET['id'],'idarea');
?>
</head>
<body>
<div class="container-fluid">

<form action="../procesos/usuarios.php" method="POST">

<div class="row">

<div class="col-md-4">
<div class="panel panel-primary">
<div class="panel-heading">
<h3 class="panel-title">
<i class="fa fa-user fa-3x"></i>
Actualizar Usuario
</h3>
</div>
<div class="panel-body">

<div class="form-group">
<label for="">NOMBRES</label>
<input type="text" name="nombres" class="form-control" 
value="<?php echo  $usuario->MostrarAtributo($_GET['id'],'nombres'); ?>"
onchange="conMayusculas(this);">
</div>

<div class="form-group">
<label for="">APELLIDOS</label>
<input type="text" name="apellidos" class="form-control"
 value="<?php echo $usuario->MostrarAtributo($_GET['id'],'apellidos'); ?>"
 onchange="conMayusculas(this);">
</div>

<div class="form-group">
<label for="">DNI</label>
<input type="number" name="dni" class="form-control" 
value="<?php echo $usuario->MostrarAtributo($_GET['id'],'dni'); ?>"
onchange="conMayusculas(this);">
</div>

<div class="form-group">
<label for="">TIPO</label>
<select name="tipousuario"  class="form-control">
<option value="<?php echo $usuario->MostrarAtributo($_GET['id'],'idtipousuario'); ?>"><?php echo $usuario->MostrarAtributo($_GET['id'],'tipousuario'); ?></option>
<option value="1">USUARIO</option>
<option value="2">ADMINISTRADOR</option>
</select>
</div>
<div class="form-group">
<label for="">ÁREA</label>
<select name="area"  class="form-control">
<option value="<?php echo $usuario->MostrarAtributo($_GET['id'],'idarea'); ?>">
<?php echo $usuario->MostrarAtributo($_GET['id'],'descripcion'); ?>
</option>
<?php
$link=Conectarse();
$Sql ="SELECT  ID,DESCRIPCION FROM [022BDCOMUN].DBO.AREA WHERE ID <>'$idarea'
   ORDER BY DESCRIPCION";
$result=mssql_query($Sql) or die(mssql_error());
while ($row=mssql_fetch_array($result)) {
?>
<option value="<?php echo $row['ID']?>">
<?php echo $row['DESCRIPCION'];?></option>
<?php }?>
</select>
</div>

<div class="form-group">
<label for="">CÓDIGO STARSOFT</label>
<input type="number" name="starsoft" class="form-control" value="<?php echo $usuario->MostrarAtributo($_GET['id'],'starsoft'); ?>">
</div>

<input type="hidden" name="idusuario" value="<?php echo $_GET['id'] ?>">
<input type="hidden" name="tipo" value="actualizar">

</div>
<div class="panel-footer">
<button class="btn btn-primary btn-block btn-lg">Actualizar</button>
</div>
</div>
	
</div>


</div>

</form>

</div>
</body>
</html>