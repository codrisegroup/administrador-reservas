<?php /* Smarty version 3.1.24, created on 2016-01-28 15:10:39
         compiled from "../estilos/templates/header-mantenimientos.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:85136619256aa75bf8dbea3_28626810%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dad35579c5eb8a419b4479b223bbed23e719d187' => 
    array (
      0 => '../estilos/templates/header-mantenimientos.tpl',
      1 => 1454002917,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '85136619256aa75bf8dbea3_28626810',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56aa75bf8ddb83_30432980',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56aa75bf8ddb83_30432980')) {
function content_56aa75bf8ddb83_30432980 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '85136619256aa75bf8dbea3_28626810';
?>
<ul class="nav navbar-nav">
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">Mantenimiento
<strong class="caret"></strong></a>
<ul class="dropdown-menu">
<li>
<a href="/adm-reserva/consulta/usuarios">Registrar Usuarios</a>
</li>
<li class="divider"></li>
<li>
<a href="/adm-reserva/pages/estados">Estados</a>
</li>
</ul>
</li>
</ul><?php }
}
?>