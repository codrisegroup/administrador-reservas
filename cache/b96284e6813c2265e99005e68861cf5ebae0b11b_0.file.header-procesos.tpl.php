<?php /* Smarty version 3.1.24, created on 2015-12-01 08:03:36
         compiled from "../estilos/templates/header-procesos.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:320091757565d9aa80db378_00002525%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b96284e6813c2265e99005e68861cf5ebae0b11b' => 
    array (
      0 => '../estilos/templates/header-procesos.tpl',
      1 => 1448973990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '320091757565d9aa80db378_00002525',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_565d9aa80dd7c4_30926805',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565d9aa80dd7c4_30926805')) {
function content_565d9aa80dd7c4_30926805 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '320091757565d9aa80db378_00002525';
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