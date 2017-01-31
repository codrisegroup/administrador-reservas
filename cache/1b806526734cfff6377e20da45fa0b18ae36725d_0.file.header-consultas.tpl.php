<?php /* Smarty version 3.1.24, created on 2016-01-28 15:10:39
         compiled from "../estilos/templates/header-consultas.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:179840485456aa75bf8df5f1_44220019%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b806526734cfff6377e20da45fa0b18ae36725d' => 
    array (
      0 => '../estilos/templates/header-consultas.tpl',
      1 => 1454002917,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '179840485456aa75bf8df5f1_44220019',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56aa75bf8e1155_91218369',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56aa75bf8e1155_91218369')) {
function content_56aa75bf8e1155_91218369 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '179840485456aa75bf8df5f1_44220019';
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