<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Lista de Compra</title>
<?php include('../header.php'); ?>

<script language="javascript">
$(document).ready(function() {
$(".botonExcel").click(function(event) {
$("#datos_a_enviar").val( $("<div>").append( $("#Exportar_a_Excel").eq(0).clone()).html());
$("#FormularioExportacion").submit();
});
});
</script>

<style>
.botonExcel{cursor:pointer;}
</style>

</head>
<body>
<div class="container-fluid">


<div class="row">

<form action="lista-de-compra" method="POST">

<div class="col-md-3">
<div class="form-group">
<input type="date"  name="fechainicio" required class="form-control" value="<?php echo $_POST['fechainicio']; ?>">
</div>
</div>

<div class="col-md-3">
<div class="form-group">
<input type="date"  name="fechafin"  max="<?php echo date('Y-m-d') ?>"  required class="form-control" value="<?php echo $_POST['fechafin']; ?>">
</div>
</div>


<div class="col-md-3">
<div class="form-group">
<button class="btn btn-primary">
<i class="fa fa-search fa-2x"></i>
Consultar
</button>
</div>
</div>

</form>


<div class="col-md-2">
</div>
<div class="col-md-1">
<form action="generar-excel.php" method="post" target="_blank" id="FormularioExportacion">

<img src="/adm-reserva/assets/img/excel.png" class="img-responsive botonExcel" 
 title="DESCARGAR ARCHIVO"id="#excel" width="50">


<input type="hidden" id="datos_a_enviar" name="datos_a_enviar" />
</form>

</div>

</div>


<div class="row">
<div class="col-md-12">
<?php include('../grid/lista-de-compra.php'); ?>
</div>
</div>

</div>
</body>
</html>