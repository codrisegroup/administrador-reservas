<div class="table-responsive">
<table class="table table-bordered table-condensed">
<?php
$link=  Conectarse();
$listado= mssql_query("SELECT CODESTADO,DESCRIESTADO FROM [022BDCOMUN].DBO.ESTADO",$link);
?>
<thead>
<tr class="success">
<th>CÓDIGO</th>
<th>DESCRIPCIÓN</th>
</tr>
</thead>
<tbody>
<?php


while($row= mssql_fetch_array($listado))
{
?>
<tr class="active">
<td> <?php echo $row[CODESTADO]; ?>  </td>
<td> <?php echo $row[DESCRIESTADO] ; ?> </td>
</tr>

<?php 
}
?>
<tbody>
</table>
</div>
