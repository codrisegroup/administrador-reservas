<?php /* Smarty version 3.1.24, created on 2015-12-01 07:51:34
         compiled from "./estilos/templates/header-salir.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1882278458565d97d66c0f50_09933418%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cde3d2cf01561239a490121a0176f9246847eb89' => 
    array (
      0 => './estilos/templates/header-salir.tpl',
      1 => 1448973990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1882278458565d97d66c0f50_09933418',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_565d97d66cf0d6_66892481',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565d97d66cf0d6_66892481')) {
function content_565d97d66cf0d6_66892481 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1882278458565d97d66c0f50_09933418';
?>
<ul class="nav navbar-nav navbar-right">
<li>
<a href="#">
<i class="glyphicon glyphicon-user text-success"></i>
<?php echo $_SESSION['nombres'];?>
 <?php echo $_SESSION['apellidos'];?>
</a>
</li>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown"><strong class="caret"></strong></a>
<ul class="dropdown-menu">
<li>
<a href="/adm-reserva/procesos/acceso?tipo=salir">Salir</a>
</li>
</ul>
</li>
</ul><?php }
}
?>