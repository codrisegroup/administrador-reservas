<?php /* Smarty version 3.1.24, created on 2016-01-28 15:10:39
         compiled from "../estilos/templates/header-procesos.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:146137556556aa75bf8cffc4_79124743%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b96284e6813c2265e99005e68861cf5ebae0b11b' => 
    array (
      0 => '../estilos/templates/header-procesos.tpl',
      1 => 1454002917,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '146137556556aa75bf8cffc4_79124743',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56aa75bf8d6cb5_93519423',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56aa75bf8d6cb5_93519423')) {
function content_56aa75bf8d6cb5_93519423 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '146137556556aa75bf8cffc4_79124743';
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