<form action="../procesos/usuarios.php" method="POST">

<div class="form-group">
<a  href="#modal-registro-de-usuarios" role="button" 
class="btn btn-primary btn-block" data-toggle="modal">
<i class="fa fa-plus fa-2x"></i>
REGISTRAR DE USUARIOS</a>
</div>

<div class="modal fade" id="modal-registro-de-usuarios" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
×
</button>
<h4 class="modal-title text-primary" id="myModalLabel">
REGISTRO DE USUARIOS
</h4>
</div>
<div class="modal-body">
<label for="">NOMBRES</label>
<input type="text" name="nombres"class="form-control" onchange="conMayusculas(this);" required>

<label for="">APELLIDOS</label>
<input type="text" name="apellidos"class="form-control" onchange="conMayusculas(this);" required>

<label for="">DNI</label>
<input type="number" name="dni" class="form-control" required>

<label for="">CÓDIGO STARSOFT</label>
<input type="number" name="starsoft" class="form-control" required>

<label for="">TIPO</label>
<select name="tipousuario"  class="form-control" required>
<option value="">[ SELECCIONAR ]</option>
<option value="1">USUARIO</option>
<option value="2">ADMINISTRADOR</option>
</select>

<label for="">ÁREA</label>
<select name="area"  class="form-control" required>
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

<input type="hidden" name="tipo" value="registrar">

</div>
<div class="modal-footer">

<button type="submit" class="btn btn-primary">
Registrar
</button>
<button type="button" class="btn btn-default" data-dismiss="modal">
Cerrar
</button> 

</div>
</div>

</div>

</div>





</form>