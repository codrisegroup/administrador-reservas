<?php /* Smarty version 3.1.24, created on 2015-12-01 07:51:34
         compiled from "./estilos/templates/header-transacciones.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:346438968565d97d6697f69_98041027%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dfe3275a4fd12ba62cfd80c8b8090d52b1ea5047' => 
    array (
      0 => './estilos/templates/header-transacciones.tpl',
      1 => 1448973990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '346438968565d97d6697f69_98041027',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_565d97d66b0012_83233068',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565d97d66b0012_83233068')) {
function content_565d97d66b0012_83233068 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '346438968565d97d6697f69_98041027';
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