<?php 
class Acceso 
{
protected $user;
protected $pass;

function __construct($user,$pass)
{
$this->user=$user;
$this->pass=$pass;
}

function Login()
{


$link=Conectarse();	
$consulta= "SELECT * FROM [022BDCOMUN].DBO.USUARIOS
WHERE usuario='$this->user' AND contrasena='$this->pass' AND idtipousuario=2 "; 
$resultado= mssql_query($consulta,$link) or die (mssql_error());
$fila=mssql_fetch_array($resultado);

 if (!$fila[0]) 
{
echo '<script>
alert("Usuario o Password errados, por favor verifique.")
self.location = "/adm-reserva/"
</script>';
}
else 
{

if (!isset($_SESSION)) {
@session_start();
}

$_SESSION['adm_cod_rsv_id_usuario'] = $fila['id_usuario'];
$_SESSION['adm_cod_rsv_nombres'] = $fila['nombres'];
$_SESSION['adm_cod_rsv_apellidos'] = $fila['apellidos'];
$_SESSION['adm_cod_rsv_starsoft'] = $fila['starsoft'];
$_SESSION['idempresa'] = $fila['idempresa'];
$_SESSION['adm_cod_rsv_idarea'] = $fila['idarea'];
$_SESSION['adm_cod_rsv_audjefe'] = $fila['aud_jefe'];


header("Location: /adm-reserva/home");
}

}



function Salir()
{
   session_start();
   if(!isset($_SESSION['adm_cod_rsv_id_usuario']))
   {
       echo "No hay ninguna sesion iniciada";
      header('Location: /adm-reserva');    
   }
//esto ocurre cuando la sesion caduca.
        
  
   else
   { 
      
  unset($_SESSION['adm_cod_rsv_id_usuario']);
  unset($_SESSION['adm_cod_rsv_nombres']);
  unset($_SESSION['adm_cod_rsv_apellidos']);
  unset($_SESSION['adm_cod_rsv_starsoft']);
  unset($_SESSION['adm_cod_rsv_idempresa']);
  unset($_SESSION['adm_cod_rsv_idarea']);
  unset($_SESSION['adm_cod_rsv_audjefe']);
     //session_destroy();
     
      header('Location: /adm-reserva');       
   }
 
 
}





}







 ?>