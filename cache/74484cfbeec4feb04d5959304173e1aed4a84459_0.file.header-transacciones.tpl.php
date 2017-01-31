<?php /* Smarty version 3.1.24, created on 2016-01-28 15:10:39
         compiled from "../estilos/templates/header-transacciones.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:211298075656aa75bf8aede5_15171346%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74484cfbeec4feb04d5959304173e1aed4a84459' => 
    array (
      0 => '../estilos/templates/header-transacciones.tpl',
      1 => 1454002917,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '211298075656aa75bf8aede5_15171346',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56aa75bf8c8839_61271790',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56aa75bf8c8839_61271790')) {
function content_56aa75bf8c8839_61271790 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '211298075656aa75bf8aede5_15171346';
?>
<ul class="nav navbar-nav">
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">Transacciones<strong class="caret"></strong></a>
<ul class="dropdown-menu">
<li>
<a href="/adm-reserva/consulta/reserva1">Reserva N° 1</a>
</li>
<li class="divider">
</li>
<li>
<a href="/adm-reserva/consulta/reserva">Reservas</a>
</li>
<li class="divider">
</li>
<li>
<a href="/adm-reserva/consulta/rq-materiales">Requerimiento de Materiales</a>
</li>
</ul>
</li>
</ul><?php }
}
?>