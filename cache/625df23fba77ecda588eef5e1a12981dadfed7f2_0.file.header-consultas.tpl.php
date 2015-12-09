<?php /* Smarty version 3.1.24, created on 2015-12-01 07:51:34
         compiled from "./estilos/templates/header-consultas.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:950141048565d97d66b9ef0_53008973%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '625df23fba77ecda588eef5e1a12981dadfed7f2' => 
    array (
      0 => './estilos/templates/header-consultas.tpl',
      1 => 1448973989,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '950141048565d97d66b9ef0_53008973',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_565d97d66bbae1_25733427',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565d97d66bbae1_25733427')) {
function content_565d97d66bbae1_25733427 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '950141048565d97d66b9ef0_53008973';
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