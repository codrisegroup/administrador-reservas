<?php /* Smarty version 3.1.24, created on 2016-02-03 14:35:16
         compiled from "../estilos/templates/header-consultas.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:91302970556b25674569aa6_89186919%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bca20e34a335157dbc3adb972d377e45adea0855' => 
    array (
      0 => '../estilos/templates/header-consultas.tpl',
      1 => 1454002917,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '91302970556b25674569aa6_89186919',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56b2567456b940_29025716',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56b2567456b940_29025716')) {
function content_56b2567456b940_29025716 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '91302970556b25674569aa6_89186919';
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