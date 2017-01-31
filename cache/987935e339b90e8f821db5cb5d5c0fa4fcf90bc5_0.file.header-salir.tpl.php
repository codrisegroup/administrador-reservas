<?php /* Smarty version 3.1.24, created on 2016-01-28 15:10:39
         compiled from "../estilos/templates/header-salir.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:11399662056aa75bf8e30b2_97590371%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '987935e339b90e8f821db5cb5d5c0fa4fcf90bc5' => 
    array (
      0 => '../estilos/templates/header-salir.tpl',
      1 => 1454010805,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11399662056aa75bf8e30b2_97590371',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56aa75bf8e8d05_93197272',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56aa75bf8e8d05_93197272')) {
function content_56aa75bf8e8d05_93197272 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '11399662056aa75bf8e30b2_97590371';
?>
<ul class="nav navbar-nav navbar-right">
<li>
<a href="#">
<i class="glyphicon glyphicon-user text-success"></i>
<?php echo $_SESSION['adm_cod_rsv_nombres'];?>
 <?php echo $_SESSION['adm_cod_rsv_apellidos'];?>
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