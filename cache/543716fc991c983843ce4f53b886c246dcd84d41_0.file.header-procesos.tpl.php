<?php /* Smarty version 3.1.24, created on 2016-01-28 12:47:04
         compiled from "./estilos/templates/header-procesos.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:70753930556aa5418626ac9_43741700%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '543716fc991c983843ce4f53b886c246dcd84d41' => 
    array (
      0 => './estilos/templates/header-procesos.tpl',
      1 => 1454002917,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '70753930556aa5418626ac9_43741700',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56aa5418628aa2_30614218',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56aa5418628aa2_30614218')) {
function content_56aa5418628aa2_30614218 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '70753930556aa5418626ac9_43741700';
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