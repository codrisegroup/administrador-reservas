<?php /* Smarty version 3.1.24, created on 2016-02-03 11:41:20
         compiled from "../estilos/templates/header-transacciones.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:109796911356b22db01c99a3_62482543%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b695ec4e7c54f16cfab3bd0a615e92278632891' => 
    array (
      0 => '../estilos/templates/header-transacciones.tpl',
      1 => 1454002917,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '109796911356b22db01c99a3_62482543',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56b22db02521f6_15724538',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56b22db02521f6_15724538')) {
function content_56b22db02521f6_15724538 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '109796911356b22db01c99a3_62482543';
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