<?php /* Smarty version 3.1.24, created on 2015-12-01 08:12:51
         compiled from "../estilos/templates/header-consultas.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:341001548565d9cd3d03953_52700057%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bca20e34a335157dbc3adb972d377e45adea0855' => 
    array (
      0 => '../estilos/templates/header-consultas.tpl',
      1 => 1448973989,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '341001548565d9cd3d03953_52700057',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_565d9cd3d05588_77386169',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565d9cd3d05588_77386169')) {
function content_565d9cd3d05588_77386169 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '341001548565d9cd3d03953_52700057';
?>
<ul class="nav navbar-nav">
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">Consultas<strong class="caret"></strong></a>
<ul class="dropdown-menu">
<li>
<a href="/adm-reserva/pdf/lista-de-compra">Lista de Compra</a>
</li>
<li class="divider">
</li>
<li>
<a href="#">Lista de Articulos</a>
</li>
</ul>
</li>
</ul>
<?php }
}
?>