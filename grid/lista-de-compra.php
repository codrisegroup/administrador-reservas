<div class="table-responsive">
<table class="table table-bordered table-condensed" id="Exportar_a_Excel" border="1">
<?php

$fechainicio = new DateTime($_POST['fechainicio']);
$fechainicioformato=$fechainicio->format('d-m-Y');

$fechafin = new DateTime($_POST['fechafin']);
$fechafinformato=$fechafin->format('d-m-Y');

$link=  Conectarse();
$listado= mssql_query("SELECT L.IDLISTA_COMPRA,L.CODART,L.CODKIT,L.CANART,L.KDESCRI,
L.KUNIDAD,L.TIPO,(U.nombres+' '+U.apellidos)AS FULLNAME,
CONVERT(VARCHAR,L.FECHA,105)AS FECHA FROM [022BDCOMUN].DBO.LISTA_COMPRA AS L INNER JOIN 
[022BDCOMUN].DBO.usuarios  AS U  ON L.USUARIO=U.id_usuario WHERE 
CONVERT(VARCHAR,L.FECHA,105) BETWEEN '$fechainicioformato' AND '$fechafinformato' ",$link);
?>
<thead>
<tr class="success">
<th>ID</th>
<th>CÓDIGO KIT</th>
<th>CÓDIGO ARTICULO</th>
<th>DESCRIPCIÓN</th>
<th>UND</th>
<th>TIPO</th>
<th>CANT</th>
<th>USUARIO</th>
<th>FECHA</th>
</tr>
</thead>
<tbody>
<?php


while($row= mssql_fetch_array($listado))
{
?>
<tr class="active">
<td> <?php echo $row[IDLISTA_COMPRA]; ?>  </td>
<td> <?php echo $row[CODKIT] ; ?> </td>
<td> <?php echo $row[CODART] ; ?> </td>
<td> <?php echo utf8_encode($row[KDESCRI]); ?>  </td>
<td> <?php echo $row[KUNIDAD] ; ?> </td>
<td> <?php echo $row[TIPO] ; ?> </td>
<td> <?php echo $row[CANART]; ?> </td>
<td> <?php echo $row[FULLNAME]; ?> </td>
<td> <?php echo $row[FECHA]; ?> </td>
</tr>

<?php 
}
?>
<tbody>
</table>
</div>
