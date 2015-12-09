<?php /* Smarty version 3.1.24, created on 2015-12-01 08:03:39
         compiled from "../estilos/templates/header-buscar.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:212148934565d9aab704665_33403861%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62b4bfd1596d6989d913be0c51c9694aa25d6470' => 
    array (
      0 => '../estilos/templates/header-buscar.tpl',
      1 => 1448973989,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212148934565d9aab704665_33403861',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_565d9aab7068c6_52323222',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565d9aab7068c6_52323222')) {
function content_565d9aab7068c6_52323222 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '212148934565d9aab704665_33403861';
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