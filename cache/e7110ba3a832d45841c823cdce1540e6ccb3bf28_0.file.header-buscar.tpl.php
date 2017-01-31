<?php /* Smarty version 3.1.24, created on 2016-02-03 14:35:16
         compiled from "../estilos/templates/header-buscar.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:60716610756b256745714b7_77851857%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7110ba3a832d45841c823cdce1540e6ccb3bf28' => 
    array (
      0 => '../estilos/templates/header-buscar.tpl',
      1 => 1453999595,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '60716610756b256745714b7_77851857',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56b25674573c03_95444373',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56b25674573c03_95444373')) {
function content_56b25674573c03_95444373 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '60716610756b256745714b7_77851857';
?>

<form class="navbar-form navbar-left" role="search" method="POST"
action='/adm-reserva/consulta/codigo'>
<div class="form-group">
<input type="text" name="codigo" class="form-control"  placeholder="Código o descripción"  required autofocus >
</div> 
<button type="submit" class="btn btn-primary">
Buscar por  Código o Descripción
</button>
</form>

<form action="" class="navbar-form navbar-left" role="">
	
<a href="http://192.168.1.7/codrise/inventarios/moduloreserva/consulta/articulos" class="btn btn-info" target="_blank">Lista de Articulos</a>

</form>
<?php }
}
?>