<?php /* Smarty version 3.1.24, created on 2015-12-01 08:03:36
         compiled from "../estilos/templates/header-buscar.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1023982027565d9aa80e61d8_94151923%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3afaea1dcacf44351581c38b97e98cb61fbf25b0' => 
    array (
      0 => '../estilos/templates/header-buscar.tpl',
      1 => 1448973989,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1023982027565d9aa80e61d8_94151923',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_565d9aa80e7db7_39786386',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565d9aa80e7db7_39786386')) {
function content_565d9aa80e7db7_39786386 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1023982027565d9aa80e61d8_94151923';
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
<?php }
}
?>