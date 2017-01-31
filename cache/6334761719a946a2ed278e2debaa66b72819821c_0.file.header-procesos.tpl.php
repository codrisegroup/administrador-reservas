<?php /* Smarty version 3.1.24, created on 2016-02-03 11:41:20
         compiled from "../estilos/templates/header-procesos.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:192530158956b22db0258ec3_23053874%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6334761719a946a2ed278e2debaa66b72819821c' => 
    array (
      0 => '../estilos/templates/header-procesos.tpl',
      1 => 1454002917,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192530158956b22db0258ec3_23053874',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56b22db025aea8_38884339',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56b22db025aea8_38884339')) {
function content_56b22db025aea8_38884339 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '192530158956b22db0258ec3_23053874';
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