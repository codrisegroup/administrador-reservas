<?php /* Smarty version 3.1.24, created on 2016-01-28 14:53:41
         compiled from "./estilos/templates/header-salir.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:67613096856aa71c564d624_44802304%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cde3d2cf01561239a490121a0176f9246847eb89' => 
    array (
      0 => './estilos/templates/header-salir.tpl',
      1 => 1454010805,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '67613096856aa71c564d624_44802304',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56aa71c56627d9_28107869',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56aa71c56627d9_28107869')) {
function content_56aa71c56627d9_28107869 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '67613096856aa71c564d624_44802304';
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