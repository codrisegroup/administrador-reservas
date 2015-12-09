<form action="../procesos/usuarios.php" method="POST">

<div class="form-group">
<a  href="#modal-adm-reserva-cc" role="button" 
class="btn btn-primary" data-toggle="modal">
<i class="fa fa-plus fa-3x"></i>
REGISTRAR adm-reserva POR CENTRO DE COSTO</a>
</div>

<div class="modal fade" id="modal-adm-reserva-cc" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">

<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
×
</button>
<h4 class="modal-title text-primary" id="myModalLabel">
adm-reserva POR CENTRO DE COSTO
</h4>
</div>
<div class="modal-body">

<?php 
$sql="SELECT TOP 1 NROadm-reserva FROM [022BDCOMUN].DBO.RESERVA_CAB
ORDER BY NROadm-reserva DESC ";
$result=mssql_query($sql);
$row=mssql_fetch_array($result);
?>

<h2 class="text-primary">adm-reserva  #  <?php echo  $adm-reserva->correlativoadm-reserva();?></h2>

<label for="">CENTRO DE COSTO</label>
<select name="cc" id="" class="form-control" required>
<option value="">[SELECCIONAR]</option>
<?php
$link=Conectarse();
$Sql ="SELECT  CENCOST_CODIGO,CENCOST_DESCRIPCION,
(CENCOST_DESCRIPCION+' - '+CENCOST_CODIGO)as fullname
from [010BDCONTABILIDAD].DBO.CENTRO_COSTOS
order by  CENCOST_DESCRIPCION";
$result=mssql_query($Sql) or die(mssql_error());
while ($row=mssql_fetch_array($result)) {
?>
<option class="text-primary"value="<?php echo $row['CENCOST_CODIGO']?>">
<?php echo utf8_encode($row['fullname']);?></option>
<?php }?>
</select>

<input type="hidden"  name="tipoadm-reserva" value="CC">
<input type="hidden"  name="tipo" value="registrar">
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