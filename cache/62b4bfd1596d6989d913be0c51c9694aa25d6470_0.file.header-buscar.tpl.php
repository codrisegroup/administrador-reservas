<?php /* Smarty version 3.1.24, created on 2016-01-28 11:47:31
         compiled from "../estilos/templates/header-buscar.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:162319720556aa4623dea788_46068353%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62b4bfd1596d6989d913be0c51c9694aa25d6470' => 
    array (
      0 => '../estilos/templates/header-buscar.tpl',
      1 => 1453999595,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '162319720556aa4623dea788_46068353',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56aa4623e13c87_93585983',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56aa4623e13c87_93585983')) {
function content_56aa4623e13c87_93585983 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '162319720556aa4623dea788_46068353';
?>

<form class="navbar-form navbar-left" role="search" method="POST"
action='/adm-reserva/consulta/codigo'>
<div class="form-group">
<input type="text" name="codigo" class="form-control"  placeholder="Código o descripción"  required autofocus >
</div> 
<button type="submit" class="btn btn-primary">
Buscar por  Código o Descripción
</button>
</form>

<form action="" class="navbar-form navbar-left" role="">
	
<a href="http://192.168.1.7/codrise/inventarios/moduloreserva/consulta/articulos" class="btn btn-info" target="_blank">Lista de Articulos</a>

</form>
<?php }
}
?>