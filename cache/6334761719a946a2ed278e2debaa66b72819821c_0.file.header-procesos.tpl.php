<?php /* Smarty version 3.1.24, created on 2015-12-01 08:03:39
         compiled from "../estilos/templates/header-procesos.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:561324911565d9aab6f4926_75555519%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6334761719a946a2ed278e2debaa66b72819821c' => 
    array (
      0 => '../estilos/templates/header-procesos.tpl',
      1 => 1448973990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '561324911565d9aab6f4926_75555519',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_565d9aab6f6bf0_60926280',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565d9aab6f6bf0_60926280')) {
function content_565d9aab6f6bf0_60926280 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '561324911565d9aab6f4926_75555519';
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