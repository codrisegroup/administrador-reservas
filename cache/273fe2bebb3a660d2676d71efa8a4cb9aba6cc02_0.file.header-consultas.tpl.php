<?php /* Smarty version 3.1.24, created on 2015-12-01 08:03:39
         compiled from "../estilos/templates/header-consultas.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:588241821565d9aab6ff435_62232762%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '273fe2bebb3a660d2676d71efa8a4cb9aba6cc02' => 
    array (
      0 => '../estilos/templates/header-consultas.tpl',
      1 => 1448973989,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '588241821565d9aab6ff435_62232762',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_565d9aab701338_83822459',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565d9aab701338_83822459')) {
function content_565d9aab701338_83822459 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '588241821565d9aab6ff435_62232762';
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