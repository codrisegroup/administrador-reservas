<?php /* Smarty version 3.1.24, created on 2016-02-03 14:35:16
         compiled from "../estilos/templates/header-procesos.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:48563304256b2567455a532_77679118%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd47b799c7a47bc8b527a21b5012c66332883814' => 
    array (
      0 => '../estilos/templates/header-procesos.tpl',
      1 => 1454002917,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '48563304256b2567455a532_77679118',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56b2567455c420_38271404',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56b2567455c420_38271404')) {
function content_56b2567455c420_38271404 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '48563304256b2567455a532_77679118';
?>
<ul class="nav navbar-nav">
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">Procesos<strong class="caret"></strong></a>
<ul class="dropdown-menu">
<li>
<a href="#">Anular Reserva</a>
</li>
<li>
<a href="#">Anular Requerimiento de Materiales</a>
</li>
<li>
<a href="#">Eliminar Detalle Reserva</a>
</li>
</ul>
</li>
</ul><?php }
}
?>