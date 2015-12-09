<?php /* Smarty version 3.1.24, created on 2015-12-01 08:12:51
         compiled from "../estilos/templates/header-procesos.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:241558202565d9cd3cfc1a7_40013131%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd47b799c7a47bc8b527a21b5012c66332883814' => 
    array (
      0 => '../estilos/templates/header-procesos.tpl',
      1 => 1448973990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '241558202565d9cd3cfc1a7_40013131',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_565d9cd3cfdf76_41035674',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565d9cd3cfdf76_41035674')) {
function content_565d9cd3cfdf76_41035674 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '241558202565d9cd3cfc1a7_40013131';
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