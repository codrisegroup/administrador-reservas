<?php /* Smarty version 3.1.24, created on 2015-12-01 08:12:51
         compiled from "../estilos/templates/header-mantenimientos.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:364498660565d9cd3cffc57_86865564%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '601bfa3b51ed0e7c18251addb27edac2bb4b6460' => 
    array (
      0 => '../estilos/templates/header-mantenimientos.tpl',
      1 => 1448973990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '364498660565d9cd3cffc57_86865564',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_565d9cd3d01c89_80818363',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565d9cd3d01c89_80818363')) {
function content_565d9cd3d01c89_80818363 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '364498660565d9cd3cffc57_86865564';
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