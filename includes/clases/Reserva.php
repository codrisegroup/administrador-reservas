<?php 

class Reserva
{

function MostrarAtributo($reserva,$atributo)

{


	$link=Conectarse();
	$sql="SELECT C.NRORESERVA,T.TDESCRI,C.OT,
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
	C.SOLICITANTE=T.TCLAVE WHERE C.NRORESERVA='$reserva' AND  TCOD='12' AND C.ESTADO <> '07'";
	$result=mssql_query($sql);
	$row=mssql_fetch_array($result);
	return $row[$atributo];

}



function ActualizarCantidad($reserva,$idreserva,$cantidad,$clase)
{
 $link=Conectarse();
 $SQL="UPDATE  [022BDCOMUN].DBO.RESERVA_DET SET CANTIDAD='$cantidad',
 CANT_PEND='$cantidad' WHERE  IDRESERVA_DET='$idreserva'";
 $RESULT=mssql_query($SQL);
 if (!$RESULT)
  {
    echo "error";
  }
  else
  {
  	 if ($clase='1') 
  	 {
  	   header('Location: /adm-reserva/pages/editar-reserva?id='.$reserva);
  	 }
  	 else
  	 {
  	 	echo "No existe el tipo";
  	 }
  }
}



function EliminarItem($reserva,$idreserva,$clase)
{
 $link=Conectarse();
 $SQL="DELETE FROM   [022BDCOMUN].DBO.RESERVA_DET  WHERE  IDRESERVA_DET='$idreserva'";
 $RESULT=mssql_query($SQL);
 if (!$RESULT)
  {
    echo "error";
  }
  else
  {
  	 if ($clase='1') 
  	 {
  	   header('Location: /adm-reserva/pages/editar-reserva?id='.$reserva);
  	 }
  	 else
  	 {
  	 	echo "No existe el tipo";
  	 }
  }
}



function TrasladarItem($reservaoriginal,$reservanueva,$codigo,$cantidad,$clase)
{

$link=Conectarse();
$SQL ="IF EXISTS(SELECT * FROM [022BDCOMUN].DBO.RESERVA_DET  WHERE
CODIGO='$codigo' AND NRORESERVA=$reservanueva)
UPDATE [022BDCOMUN].DBO.RESERVA_DET  SET 
CANTIDAD=CANTIDAD+$cantidad,CANT_PEND=CANTIDAD+$cantidad
where NRORESERVA='$reservanueva'and CODIGO='$codigo'  
ELSE
INSERT INTO[022BDCOMUN].DBO.RESERVA_DET(NRORESERVA,CODIGO,CANTIDAD,CANT_PEND) 
VALUES('$reservanueva','$codigo','$cantidad','$cantidad')";

$SQL1="UPDATE [022BDCOMUN].DBO.RESERVA_DET SET  CANTIDAD=CANTIDAD-$cantidad,
CANT_PEND=CANTIDAD-$cantidad
WHERE NRORESERVA='$reservaoriginal' AND CODIGO='$codigo'";

$SQL2="DELETE [022BDCOMUN].DBO.RESERVA_DET WHERE  CANTIDAD=0";



$RESULT=mssql_query($SQL);
if (!$SQL)
 {
	echo "error";
 }
 else
 {

 	$RESULT1=mssql_query($SQL1);

 	$RESULT2=mssql_query($SQL2);
	if ($clase='1') 
	 {
	   header('Location: /adm-reserva/pages/editar-reserva?id='.$reservaoriginal);
	 }
	 else
	 {
	 	echo "No existe el tipo";
	 }
 }

}

}
 ?>