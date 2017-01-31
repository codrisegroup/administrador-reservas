<?php /* Smarty version 3.1.24, created on 2016-02-03 11:41:20
         compiled from "../estilos/templates/header-salir.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:200158855356b22db026e312_80036442%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bcb33f7e680f18b6edd040b26edddc8ac568654e' => 
    array (
      0 => '../estilos/templates/header-salir.tpl',
      1 => 1454010805,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '200158855356b22db026e312_80036442',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56b22db027c350_68954799',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56b22db027c350_68954799')) {
function content_56b22db027c350_68954799 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '200158855356b22db026e312_80036442';
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