<?php /* Smarty version 3.1.24, created on 2016-01-28 12:47:04
         compiled from "./estilos/templates/header-transacciones.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:43537565456aa54185b0d95_58292714%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dfe3275a4fd12ba62cfd80c8b8090d52b1ea5047' => 
    array (
      0 => './estilos/templates/header-transacciones.tpl',
      1 => 1454002917,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '43537565456aa54185b0d95_58292714',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56aa5418621a28_68666394',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56aa5418621a28_68666394')) {
function content_56aa5418621a28_68666394 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '43537565456aa54185b0d95_58292714';
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