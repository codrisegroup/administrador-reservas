<style>
th,td
{
font-size: 12px;
}
</style>


<div class="table-responsive">
<table class="table table-bordered table-condensed" >
<?php
$link=  Conectarse();
$listado= mssql_query("SELECT  (ROW_NUMBER() OVER(ORDER BY CODIGO))AS ITEM,
D.IDRESERVA_DET,D.NRORESERVA,D.CODIGO,D.CANTIDAD,D.CANT_PEND,
M.ADESCRI,M.AUNIDAD,D.REQUERIMIENTO,D.NUMERO_DOC
FROM [022BDCOMUN].DBO.RESERVA_DET  AS D  INNER JOIN 
[010BDCOMUN].DBO.MAEART AS M  ON D.CODIGO=M.ACODIGO WHERE  NRORESERVA='$_GET[id]'",$link);
?>
<thead>
<tr class="success">
<th>IT</th>
<th>CÓDIGO</th>
<th>DESCRIPCIÓN</th>
<th>UND</th>
<th>CANT.</th>
<th>SALDO</th>
<th>REQUERIMIENTO</th>
<th>N. INGRESO</th>
<th style="text-align: center"><i class="fa fa-pencil-square-o fa-2x text-primary"></i></th>
<th style="text-align: center"><i class="fa fa-truck fa-2x text-success"></i></th>
<th style="text-align: center"><i class="fa fa-trash fa-2x text-danger"></i></th>

</tr>
</thead>
<tbody>
<?php


while($reg= mssql_fetch_array($listado))
{
?>
<tr class="active">
<?php 
$txta                      ='modal-containera-';
$txtxa                     ='#modal-containera-';
$txta                      .=$j;
$txtxa                     =$txtxa.=$j;

$txtz                      ='modal-containerz-';
$txtxz                     ='#modal-containerz-';
$txtz                      .=$j;
$txtxz                     =$txtxz.=$j;

$txt                       ='modal-container-';
$txtx                      ='#modal-container-';
$txt                       .=$i;
$txtx                      =$txtx.=$i;
?>
<td> <?php echo $reg[ITEM];    ?>    </td>
<td> <?php echo $reg[CODIGO];  ?>    </td>
<td> <?php echo utf8_encode($reg[ADESCRI]); ?>    </td>
<td> <?php echo $reg[AUNIDAD];            ?>    </td>
<td> <?php echo round($reg[CANTIDAD],2); ?>    </td>
<td> <?php echo round($reg[CANT_PEND],2); ?>    </td>
<td> <?php echo $reg[REQUERIMIENTO]; ?>    </td>
<td> <?php echo $reg[NUMERO_DOC]; ?>    </td>
<td style="text-align: center">
<a id="modal-899574" href='<?php echo $txtxa;?>'
role="button" class="btn" data-toggle="modal">
<i class="fa fa-pencil-square-o fa-2x text-primary">	</i></a>
</td>

<td style="text-align: center">
<a id="modal-899574" href='<?php echo $txtxz;?>'
role="button" class="btn" data-toggle="modal">
<i class="fa fa-truck fa-2x text-success">	</i></a>
</td>


<td style="text-align: center">
<a id="modal-899574" href='<?php echo $txtx;?>'
role="button" class="btn" data-toggle="modal">
<i class="fa fa-trash fa-2x text-danger">	</i></a>
</td>

<!-- INICIO MODAL ACTUALIZAR -->

<form action="../procesos/reserva.php" method="POST">

<div class="modal fade" id="<?php echo $txta; ?>" 
role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">

<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
×
</button>
<h4 class="modal-title text-primary" id="myModalLabel">
ACTUALIZAR  CANTIDAD
</h4>
</div>
<div class="modal-body">
<input type="hidden" name="reserva" value="<?php echo $_GET['id'];?>">
<input type="hidden" name="idreserva"value="<?php echo $reg['IDRESERVA_DET']; ?>">
<input type="hidden" name="tipo"value="actualizar">
<input type="hidden" name="clase" value="1">
<!-- clase=actualizar reserva admin TI -->
<div class="form-group">
<label for="">CÓDIGO:</label>
<input type="text" name="codigo" class="form-control"  readonly=""
value="<?php echo $reg[CODIGO]; ?>">
</div>

<div class="form-group">
<label for="">CANTIDAD:</label>
<input type="number" name="cantidad" class="form-control" 
value="<?php echo round($reg[CANTIDAD],2); ?>" 
 step="any"  min="1"  >
</div>

</div>
<div class="modal-footer">

<button type="submit" class="btn btn-primary">
Actualizar
</button>
<button type="button" class="btn btn-default" data-dismiss="modal">
Cerrar
</button> 
</div>
</div>

</div>

</div>

</form>
<!-- FIN MODAL ACTUALIZAR-->



<!-- INICIO MODAL ELIMINAR ITEM -->

<form action="../procesos/reserva.php" method="POST">

<div class="modal fade" id="<?php echo $txt; ?>" 
role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">

<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
×
</button>
<h4 class="modal-title text-danger" id="myModalLabel">
ELIMINAR CANTIDAD
</h4>
</div>
<div class="modal-body">
<input type="hidden" name="reserva" value="<?php echo $_GET['id'];?>">
<input type="hidden" name="idreserva"value="<?php echo $reg['IDRESERVA_DET']; ?>">
<input type="hidden" name="tipo"value="eliminaritem">
<input type="hidden" name="clase" value="1">

<div class="form-group">
<label for="">CÓDIGO:</label>
<input type="text" name="codigo" class="form-control"  readonly=""
value="<?php echo $reg[CODIGO]; ?>">
</div>

<div class="form-group">
<label for="">CANTIDAD:</label>
<input type="number" name="cantidad" class="form-control" value="<?php echo round($reg[CANTIDAD],2); ?>" 
 step="any"  min="1"  max="<?php echo round($reg[CANTIDAD],2); ?>" readonly>
</div>

</div>
<div class="modal-footer">

<button type="submit" class="btn btn-danger">
Eliminar
</button>
<button type="button" class="btn btn-default" data-dismiss="modal">
Cerrar
</button> 
</div>
</div>

</div>

</div>

</form>
<!-- FIN MODAL ELIMINAR ITEM-->



<!-- INICIO MODAL TRASLADAR ITEM -->

<form action="../procesos/reserva.php" method="POST">

<div class="modal fade" id="<?php echo $txtz; ?>" 
role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">

<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
×
</button>
<h4 class="modal-title text-success" id="myModalLabel">
TRASLADAR
</h4>
</div>
<div class="modal-body">
<input type="hidden" name="reservaoriginal" value="<?php echo $_GET['id'];?>">
<input type="hidden" name="idreserva"value="<?php echo $reg['IDRESERVA_DET']; ?>">
<input type="hidden" name="tipo"value="trasladaritem">
<input type="hidden" name="clase" value="1">

<div class="form-group">
<label for="">CÓDIGO:</label>
<input type="text" name="codigo" class="form-control"  readonly=""
value="<?php echo $reg[CODIGO]; ?>">
</div>

<div class="form-group">
<label for="">CANTIDAD:</label>
<input type="number" name="cantidad" class="form-control" value="<?php echo round($reg[CANTIDAD],2); ?>" 
 step="any"  min="1"  max="<?php echo round($reg[CANTIDAD],2); ?>" >
</div>


<div class="form-group">
<label for="">RESERVA</label>
<select name="reservanueva" class="form-control"required>
<option value="">[SELECCIONAR]</option>
<?php
$link=Conectarse();
$SQL="SELECT  NRORESERVA,OT,CENTROCOSTO FROM [022BDCOMUN].DBO.RESERVA_CAB WHERE
  ESTADO='00' AND NRORESERVA <> $_GET[id];";
$RESULT=mssql_query($SQL) or die(mssql_error());
while ($row=mssql_fetch_array($RESULT)) {
?>
<option value ="<?php echo $row['NRORESERVA']?>">
<?php echo  "#".$row['NRORESERVA'].' - '.$row['OT'].$row['CENTROCOSTO']?></option>
<?php }?>
</select>
</div>

</div>
<div class="modal-footer">

<button type="submit" class="btn btn-success">
Trasladar
</button>
<button type="button" class="btn btn-default" data-dismiss="modal">
Cerrar
</button> 
</div>
</div>

</div>

</div>

</form>
<!-- FIN MODAL TRASLADAR ITEM-->


</tr>

<?php 
$i=$i+1;
$j=$j+1;
$z=$z+1; 
}
?>
<tbody>
</table>
</div>
