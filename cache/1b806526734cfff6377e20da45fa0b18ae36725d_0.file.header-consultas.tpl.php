<?php /* Smarty version 3.1.24, created on 2015-12-01 08:03:36
         compiled from "../estilos/templates/header-consultas.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1536441054565d9aa80e2c13_60706867%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b806526734cfff6377e20da45fa0b18ae36725d' => 
    array (
      0 => '../estilos/templates/header-consultas.tpl',
      1 => 1448973989,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1536441054565d9aa80e2c13_60706867',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_565d9aa80e4816_83373803',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565d9aa80e4816_83373803')) {
function content_565d9aa80e4816_83373803 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1536441054565d9aa80e2c13_60706867';
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