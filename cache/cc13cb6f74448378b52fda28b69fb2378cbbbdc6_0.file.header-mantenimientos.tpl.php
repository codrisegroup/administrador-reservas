<?php /* Smarty version 3.1.24, created on 2016-02-03 11:41:20
         compiled from "../estilos/templates/header-mantenimientos.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:40198449656b22db025f3e4_63374189%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc13cb6f74448378b52fda28b69fb2378cbbbdc6' => 
    array (
      0 => '../estilos/templates/header-mantenimientos.tpl',
      1 => 1454002917,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '40198449656b22db025f3e4_63374189',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56b22db02613c5_73020635',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56b22db02613c5_73020635')) {
function content_56b22db02613c5_73020635 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '40198449656b22db025f3e4_63374189';
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