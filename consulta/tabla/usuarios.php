<script type="text/javascript" language="javascript"
src="listado/usuarios.js"></script>

<div class="table-responsive">
<table class="table table-bordered table-condensed" 
id="usuarios">
<?php require_once('../../includes/bd/conexion.php');
$link=  Conectarse();
$listado=  mssql_query("SELECT id_usuario,nombres,apellidos,dni,
	contrasena,starsoft,idarea,idempresa,usuario_starsoft,centro_costos,aud_jefe,
	usuario,contrasena,
	CASE idtipousuario
	WHEN  1 THEN 'USUARIO'
	WHEN  2 THEN 'ADMINISTRADOR'
	WHEN  3 THEN 'NO EXISTE'
	END  AS tipousuario
	 FROM [022BDCOMUN].DBO.USUARIOS",$link);
?>
<thead>
<tr class="info">
<th>ID</th>
<th>NOMBRES Y APELLIDOS</th>
<th>USUARIO</th>
<th>CONTRASEÑA</th>
<th>COD. STARSOFT</th>
<th>TIPO</th>
<th><i class="fa fa-pencil-square text-primary fa-3x"></i></th>
</tr>
</thead>
<tbody>
<?php


while($reg= mssql_fetch_array($listado))
{
?>
<tr class="active">
<td><?php echo $reg[id_usuario]; ?>    </td>
<td><?php echo $reg[nombres].' '.$reg[apellidos];       ?>    </td>
<td><?php echo $reg[usuario];        ?>    </td>
<td><?php echo $reg[contrasena];        ?>    </td>
<td><?php echo $reg[starsoft];        ?>    </td>
<td><?php echo $reg[tipousuario];        ?>    </td>
<td><a href="../pages/editar-usuario?id=<?php echo $reg[id_usuario]; ?>">
<i class="fa fa-pencil-square text-primary fa-3x"></i></a></td>
</tr>

<?php 
}
?>
<tbody>
</table>
</div>
