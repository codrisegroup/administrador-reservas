<?php 

class Usuario
{

 function Registrar($nombres,$apellidos,$dni,$starsoft,$tipousuario,$area)
 {
   $link=Conectarse();
	$consulta="SELECT * from [022BDCOMUN].DBO.usuarios WHERE dni='$dni'";  
	$resultado=mssql_query($consulta) or die (mssql_error());  
	if (mssql_num_rows($resultado) == 0)  
	{  
	
     $SQL="INSERT INTO [022BDCOMUN].dbo.usuarios(nombres,apellidos,dni,starsoft,
     	idarea,idempresa,usuario_starsoft,centro_costos,aud_jefe,usuario,contrasena,
     	idtipousuario)
        VALUES('$nombres','$apellidos','$dni','$starsoft','$area','1','','','',
        	'$dni','$dni','$tipousuario')";
     $RESULT=mssql_query($SQL);
     if (!$RESULT)
      {
     	echo "<script>
	       alert('Error');
	       window.location='/adm-reserva/consulta/usuarios';
	      </script>";
      }
      else
      {
      	 header('Location: /adm-reserva/consulta/usuarios');
      }

	}
	else
	{
	 echo "<script>
	       alert('Ya esta registrado');
	       window.location='/adm-reserva/consulta/usuarios';
	      </script>";
	}
 


 }



function MostrarAtributo($usuario,$atributo)
{

$link=Conectarse();
$SQL="SELECT id_usuario,nombres,apellidos,dni,idtipousuario,
contrasena,starsoft,idarea,idempresa,usuario_starsoft,centro_costos,aud_jefe,
usuario,contrasena,
CASE idtipousuario
WHEN  1 THEN 'USUARIO'
WHEN  2 THEN 'ADMINISTRADOR'
WHEN  3 THEN 'NO EXISTE'
END  AS tipousuario,descripcion
FROM [022BDCOMUN].DBO.USUARIOS AS U INNER JOIN [022BDCOMUN].DBO.AREA AS A 
ON U.idarea=A.ID   WHERE  id_usuario='$usuario'";
$RESULT=mssql_query($SQL);
$ROW=mssql_fetch_array($RESULT);
return $ROW[$atributo];

}




function Actualizar($idusuario,$nombres,$apellidos,$dni,$starsoft,$tipousuario,$idarea)
{

$link=Conectarse();
$SQL="UPDATE [022BDCOMUN].dbo.usuarios set nombres='$nombres',
apellidos='$apellidos',dni='$dni',starsoft='$starsoft',
idarea='$idarea',usuario='$dni',contrasena='$dni',idtipousuario='$tipousuario'
WHERE id_usuario='$idusuario'";
$RESULT=mssql_query($SQL);
if (!$RESULT)
{
echo "<script>
alert('Error');
window.location='/adm-reserva/pages/editar-usuario?id=$idusuario';
</script>";
}
else
{
header('Location: /adm-reserva/pages/editar-usuario?id='.$idusuario);
}




}




}








 ?>