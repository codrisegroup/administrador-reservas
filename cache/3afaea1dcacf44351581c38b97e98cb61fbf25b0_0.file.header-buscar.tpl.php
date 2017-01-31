<?php /* Smarty version 3.1.24, created on 2016-01-28 11:46:41
         compiled from "../estilos/templates/header-buscar.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:46347610756aa45f1596912_73629529%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3afaea1dcacf44351581c38b97e98cb61fbf25b0' => 
    array (
      0 => '../estilos/templates/header-buscar.tpl',
      1 => 1453999595,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '46347610756aa45f1596912_73629529',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56aa45f15b3355_54467482',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56aa45f15b3355_54467482')) {
function content_56aa45f15b3355_54467482 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '46347610756aa45f1596912_73629529';
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