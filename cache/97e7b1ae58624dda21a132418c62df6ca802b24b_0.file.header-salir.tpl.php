<?php /* Smarty version 3.1.24, created on 2016-02-03 14:35:16
         compiled from "../estilos/templates/header-salir.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:33902501156b25674579c80_04939570%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97e7b1ae58624dda21a132418c62df6ca802b24b' => 
    array (
      0 => '../estilos/templates/header-salir.tpl',
      1 => 1454010805,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '33902501156b25674579c80_04939570',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56b256745803f4_11661420',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56b256745803f4_11661420')) {
function content_56b256745803f4_11661420 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '33902501156b25674579c80_04939570';
?>
<ul class="nav navbar-nav navbar-right">
<li>
<a href="#">
<i class="glyphicon glyphicon-user text-success"></i>
<?php echo $_SESSION['adm_cod_rsv_nombres'];?>
 <?php echo $_SESSION['adm_cod_rsv_apellidos'];?>
</a>
</li>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown"><strong class="caret"></strong></a>
<ul class="dropdown-menu">
<li>
<a href="/adm-reserva/procesos/acceso?tipo=salir">Salir</a>
</li>
</ul>
</li>
</ul><?php }
}
?>