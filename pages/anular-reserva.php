<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>ANULAR RESERVA</title>
<?php include('../header.php'); ?>
</head>
<body>
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<h1>Actualizar Estado Reserva</h1>
<hr>	

<label for="">RESERVAS</label>
<select name="reserva"  class="form-control" required>
<option value="">[ SELECCIONAR ]</option>
<?php
$link=Conectarse();
$Sql ="SELECT  ID,DESCRIPCION FROM [022BDCOMUN].DBO.AREA ORDER BY DESCRIPCION";
$result=mssql_query($Sql) or die(mssql_error());
while ($row=mssql_fetch_array($result)) {
?>
<option value="<?php echo $row['ID']?>">
<?php echo $row['DESCRIPCION'];?></option>
<?php }?>
</select>

</div>
</div>
</div>
</body>
</html>