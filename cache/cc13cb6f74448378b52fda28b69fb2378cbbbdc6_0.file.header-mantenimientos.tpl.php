<?php /* Smarty version 3.1.24, created on 2015-12-01 08:03:39
         compiled from "../estilos/templates/header-mantenimientos.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:248287305565d9aab6fa075_59396718%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc13cb6f74448378b52fda28b69fb2378cbbbdc6' => 
    array (
      0 => '../estilos/templates/header-mantenimientos.tpl',
      1 => 1448973990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '248287305565d9aab6fa075_59396718',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_565d9aab6fc016_78222248',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565d9aab6fc016_78222248')) {
function content_565d9aab6fc016_78222248 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '248287305565d9aab6fa075_59396718';
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