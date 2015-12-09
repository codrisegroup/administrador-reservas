<script type="text/javascript" language="javascript"
src="listado/reserva.js"></script>

<div class="table-responsive">
<table class="table table-bordered table-condensed" 
id="reserva">
<?php require_once('../../includes/bd/conexion.php');
$link=  Conectarse();
$listado=  mssql_query("SELECT C.NRORESERVA,T.TDESCRI,C.OT,
	C.CENTROCOSTO,CONVERT(VARCHAR,C.FECHA,105)AS FECHA,
	CONVERT(VARCHAR,C.FECHA,108)AS HORA,
(CASE C.ESTADO
WHEN '00' THEN 'EMITIDO'
WHEN '01' THEN 'RQ MATERIAL'
WHEN '02' THEN 'VENTAS'
WHEN '03' THEN 'COTIZACIÓN'
WHEN '06' THEN 'ANULADA'
WHEN '07' THEN 'RESERVA 01'
END)AS ESTADOS,REQUERIMIENTO,IDAREA FROM [022BDCOMUN].DBO.RESERVA_CAB AS C
 INNER JOIN [010BDCOMUN].DBO.TABAYU AS T ON 
 C.SOLICITANTE=T.TCLAVE WHERE TCOD='12' AND C.ESTADO <> '07'",$link);
?>
<thead>
<tr class="info">
<th>NRO.</th>
<th>SOLICITANTE</th>
<th>OT</th>
<th>CENTRO DE COSTO</th>
<th>FECHA</th>
<th>HORA</th>
<th>ESTADO</th>
<th>REQUERIMIENTO</th>
<th><i class="fa fa-pencil-square text-primary fa-3x"></i></th>
</tr>
</thead>
<tbody>
<?php


while($reg= mssql_fetch_array($listado))
{
?>
<tr class="active">
<td><?php echo $reg[NRORESERVA];  ?>    </td>
<td><?php echo $reg[TDESCRI];     ?>    </td>
<td><?php echo $reg[OT];          ?>    </td>
<td><?php echo $reg[CENTROCOSTO]; ?>    </td>
<td><?php echo $reg[FECHA];       ?>    </td>
<td><?php echo $reg[HORA];        ?>    </td>
<td><?php echo $reg[ESTADOS];        ?>    </td>
<td><?php echo $reg[REQUERIMIENTO];        ?>    </td>
<td><a href="../pages/editar-reserva?id=<?php echo $reg[NRORESERVA]; ?>">
<i class="fa fa-pencil-square text-primary fa-3x"></i></a></td>
</tr>

<?php 
}
?>
<tbody>
</table>
</div>
