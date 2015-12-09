<?php /* Smarty version 3.1.24, created on 2015-12-01 07:51:34
         compiled from "./estilos/templates/header-mantenimientos.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2008856972565d97d66b6380_46042119%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '931e4f2253fef874b89245ce28982533be744b54' => 
    array (
      0 => './estilos/templates/header-mantenimientos.tpl',
      1 => 1448973990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2008856972565d97d66b6380_46042119',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_565d97d66b8295_25313876',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565d97d66b8295_25313876')) {
function content_565d97d66b8295_25313876 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2008856972565d97d66b6380_46042119';
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