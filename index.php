 <?php 
session_start();

if (!isset($_SESSION['adm_cod_rsv_id_usuario']))
{


include('includes/libs/Smarty.class.php');

$template = new Smarty(0);

$template->display('acceso.tpl');

}

else
{
	//echo "Sesion iniciada";
   header('Location: /adm-reserva/home');
}



 ?>