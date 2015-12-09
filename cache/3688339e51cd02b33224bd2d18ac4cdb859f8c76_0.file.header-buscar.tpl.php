<?php /* Smarty version 3.1.24, created on 2015-12-01 07:51:34
         compiled from "./estilos/templates/header-buscar.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:92314595565d97d66bd7d9_85044690%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3688339e51cd02b33224bd2d18ac4cdb859f8c76' => 
    array (
      0 => './estilos/templates/header-buscar.tpl',
      1 => 1448973989,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '92314595565d97d66bd7d9_85044690',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_565d97d66bf3d9_13642572',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565d97d66bf3d9_13642572')) {
function content_565d97d66bf3d9_13642572 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '92314595565d97d66bd7d9_85044690';
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