<script type="text/javascript" language="javascript"
src="listado/reserva1.js"></script>

<div class="table-responsive">
<table class="table table-bordered table-condensed" 
id="reserva1">
<?php require_once('../../includes/bd/conexion.php');
$link=  Conectarse();
$listado=  mssql_query("SELECT * FROM [022BDCOMUN].DBO.RESERVA_DET WHERE NRORESERVA=1",$link);
?>
<thead>
<tr class="info">
<th>ITEM</th>
<th>CÓDIGO</th>
<th>DESCRIPCIÓN</th>
<th>UND</th>
<th>CANT.</th>
<th>SALDO</th>
<th>OT</th>
<th>NOTA DE INGRESO</th>
<th><i class="fa fa-pencil-square text-primary fa-2x"></i></th>
</tr>
</thead>
<tbody>
<?php


while($reg= mssql_fetch_array($listado))
{
?>
<tr class="active">
<td><?php echo $reg[ITEM];  ?>    </td>
<td><?php echo utf8_encode($reg[CODIGO]);     ?>    </td>
<td><?php echo utf8_encode($reg[DESCRIPCION]);          ?>    </td>
<td><?php echo $reg[UNIDAD];        ?>    </td>
<td><?php echo $reg[CANTIDAD]; ?>    </td>
<td><?php echo $reg[CANT_PEND]; ?>    </td>
<td><?php echo $reg[OT];       ?>    </td>
<td><?php echo $reg[NUMERO_DOC];       ?>    </td>
<td><a href="#?id=<?php echo $reg[NRORESERVA]; ?>">
<i class="fa fa-pencil-square text-primary fa-2x"></i></a></td>
</tr>

<?php 
}
?>
<tbody>
</table>
</div>
