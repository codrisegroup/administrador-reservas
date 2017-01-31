<?php /* Smarty version 3.1.24, created on 2016-02-03 14:35:16
         compiled from "../estilos/templates/header-mantenimientos.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:30447873256b25674562498_67396761%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '601bfa3b51ed0e7c18251addb27edac2bb4b6460' => 
    array (
      0 => '../estilos/templates/header-mantenimientos.tpl',
      1 => 1454002917,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30447873256b25674562498_67396761',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56b25674564409_22553259',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56b25674564409_22553259')) {
function content_56b25674564409_22553259 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '30447873256b25674562498_67396761';
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