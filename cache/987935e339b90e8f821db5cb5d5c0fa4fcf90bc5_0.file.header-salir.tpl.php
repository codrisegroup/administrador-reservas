<?php /* Smarty version 3.1.24, created on 2015-12-01 08:03:36
         compiled from "../estilos/templates/header-salir.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:374847063565d9aa80e9783_18835878%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '987935e339b90e8f821db5cb5d5c0fa4fcf90bc5' => 
    array (
      0 => '../estilos/templates/header-salir.tpl',
      1 => 1448973990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '374847063565d9aa80e9783_18835878',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_565d9aa80ef861_08993889',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565d9aa80ef861_08993889')) {
function content_565d9aa80ef861_08993889 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '374847063565d9aa80e9783_18835878';
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