<?php /* Smarty version 3.1.24, created on 2016-01-28 12:47:22
         compiled from "./estilos/templates/acceso.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:99969755356aa542ac4bf75_57679725%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f9a66393ab1e324ee52bb90b357c418ce4ca3bc' => 
    array (
      0 => './estilos/templates/acceso.tpl',
      1 => 1454002917,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '99969755356aa542ac4bf75_57679725',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56aa542ac70f66_58776290',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56aa542ac70f66_58776290')) {
function content_56aa542ac70f66_58776290 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '99969755356aa542ac4bf75_57679725';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Acceso</title>

<meta name="description" content="Source code generated using layoutit.com">
<meta name="author" content="LayoutIt!">

<link href="/adm-reserva/assets/css/bootstrap.min.css" rel="stylesheet">
<link href="/adm-reserva/assets/css/style.css" rel="stylesheet">
<link rel="shortcut icon" type="image/x-icon" href="/adm-reserva/assets/img/logo48.png">

</head>
<body>

<div class="container-fluid">
<div class="row">
<div class="col-md-12">

<form action="procesos/acceso.php" method="POST">

<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">

<h1 class="modal-title text-center text-primary" id="myModalLabel">
Modulo adm-reserva
</h1>
</div>
<div class="modal-body">

<div class="form-group">
<input type="text" name="usuario" id="" class="form-control" placeholder="Usuario" required>
</div>

<div class="form-group">
<input type="password" name="password" id="" class="form-control" placeholder="Contraseña" required>
</div>

<input type="hidden" name="tipo" value="login">

</div>
<div class="modal-footer">

<button type="submit" class="btn btn-primary">
Ingresar
</button>
</div>
</div>

</div>


</form>


</div>
</div>
</div>

<?php echo '<script'; ?>
 src="/adm-reserva/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/adm-reserva/assets/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/adm-reserva/assets/js/scripts.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
?>