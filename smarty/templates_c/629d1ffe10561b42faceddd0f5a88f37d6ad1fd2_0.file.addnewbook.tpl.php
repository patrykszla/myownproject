<?php
/* Smarty version 4.2.1, created on 2022-11-02 20:08:12
  from 'C:\xampp_new\htdocs\myownproject\smarty\templates\addnewbook.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6362c01c570517_26777276',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '629d1ffe10561b42faceddd0f5a88f37d6ad1fd2' => 
    array (
      0 => 'C:\\xampp_new\\htdocs\\myownproject\\smarty\\templates\\addnewbook.tpl',
      1 => 1667416090,
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
function content_6362c01c570517_26777276 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container-fluid d-flex justify-content-center">


    <form action="" method="post" class="col-md-5">
        <legend class="text-center">Dodaj książke</legend>
        <div class="form-row">
            <div class="form-group  text-center">
                <label for="addTitle">Tytuł</label>
                <input type="text" id="addTitle" class="form-control" name="addTitle" placeholder="Tytuł">
            </div>
        </div>
        <div class="row justify-content-center mt-2">

            <button type="submit" class="btn btn-primary col-md-3">Submit</button>

        </div>
    </form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
