<?php /* Smarty version 3.1.24, created on 2015-12-01 08:12:51
         compiled from "../estilos/templates/header-buscar.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1068319071565d9cd3d07180_25786160%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7110ba3a832d45841c823cdce1540e6ccb3bf28' => 
    array (
      0 => '../estilos/templates/header-buscar.tpl',
      1 => 1448973989,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1068319071565d9cd3d07180_25786160',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_565d9cd3d08d73_98619094',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565d9cd3d08d73_98619094')) {
function content_565d9cd3d08d73_98619094 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1068319071565d9cd3d07180_25786160';
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