<?php 
//Iniciar Sesion
@session_start();

//Validar si se esta ingresando con sesion correctamente
if (!isset($_SESSION['adm_cod_rsv_id_usuario'])){
echo '<script>
alert("usuario no autenticado")
self.location = "/adm-reserva/"
</script>';
}

include('includes/libs/Smarty.class.php');
include('includes/bd/conexion.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Header</title>

<meta name="description" content="Source code generated using layoutit.com">
<meta name="author" content="LayoutIt!">

<link href="/adm-reserva/assets/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" 
href="/adm-reserva/assets/font-awesome/css/font-awesome.min.css">
<link href="/adm-reserva/assets/css/style.css" rel="stylesheet">

<link rel="shortcut icon" type="image/x-icon" href="/adm-reserva/assets/img/logo48.png">

<!-- Inicio Script convertir en mayuscula al ingresar -->
<script language    =""="JavaScript">
function conMayusculas(field) {
field.value         = field.value.toUpperCase()
}
</script>
<!-- Fin Script convertir en mayuscula al ingresar-->
</head>
<body>

<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<nav class="navbar navbar-default navbar-inverse" role="navigation">
<div class="navbar-header">

<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
<span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
</button> <a class="navbar-brand" href="/adm-reserva/home">Inicio</a>
</div>

<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

<?php 

if (getcwd()=='/var/www/adm-reserva/pages'    || 
	getcwd()=='/var/www/adm-reserva/consulta' ||
	getcwd()=='/var/www/adm-reserva/librerias'||
	getcwd()=='/var/www/adm-reserva/mensaje'  ||
	getcwd()=='/var/www/adm-reserva/pdf') 
{
$template = new Smarty(1);
}

else
{
 $template = new Smarty(0);

}



$template->display('header-transacciones.tpl');
$template->display('header-procesos.tpl');
$template->display('header-mantenimientos.tpl');
$template->display('header-consultas.tpl');
$template->display('header-buscar.tpl');
$template->display('header-salir.tpl');
?>

</div>
</nav>
</div>
</div>
</div>

<script src="/adm-reserva/assets/js/jquery.min.js"></script>
<script src="/adm-reserva/assets/js/bootstrap.min.js"></script>
<script src="/adm-reserva/assets/js/scripts.js"></script>
</body>
</html>