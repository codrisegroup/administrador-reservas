<?php /* Smarty version 3.1.24, created on 2016-01-28 12:47:04
         compiled from "./estilos/templates/header-mantenimientos.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:203840676356aa541862c310_23982239%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '931e4f2253fef874b89245ce28982533be744b54' => 
    array (
      0 => './estilos/templates/header-mantenimientos.tpl',
      1 => 1454002917,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203840676356aa541862c310_23982239',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56aa541862e327_17274695',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56aa541862e327_17274695')) {
function content_56aa541862e327_17274695 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '203840676356aa541862c310_23982239';
?>
<ul class="nav navbar-nav">
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">Mantenimiento
<strong class="caret"></strong></a>
<ul class="dropdown-menu">
<li>
<a href="/adm-reserva/consulta/usuarios">Registrar Usuarios</a>
</li>
<li class="divider"></li>
<li>
<a href="/adm-reserva/pages/estados">Estados</a>
</li>
</ul>
</li>
</ul><?php }
}
?>