<?php
/* Smarty version 4.2.1, created on 2022-11-01 18:35:07
  from 'C:\xampp_new\htdocs\myownproject\smarty\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_636158cb25e843_17659938',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a790b562d738d310a04f780fe510c6e67f7abff' => 
    array (
      0 => 'C:\\xampp_new\\htdocs\\myownproject\\smarty\\templates\\index.tpl',
      1 => 1667324070,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:js.tpl' => 1,
    'file:nav.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_636158cb25e843_17659938 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="container-fluid">
    <h4>Witam w bibliotece online</h4>
    <p>Sprawdź zbiór naszych <a href="?page=books">ksiązek</a></p>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
