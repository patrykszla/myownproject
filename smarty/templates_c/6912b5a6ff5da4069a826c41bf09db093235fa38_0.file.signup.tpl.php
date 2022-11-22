<?php
/* Smarty version 4.2.1, created on 2022-11-22 20:59:44
  from 'C:\xampp_new\htdocs\myownproject\smarty\templates\signup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_637d2a3072c864_33278883',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6912b5a6ff5da4069a826c41bf09db093235fa38' => 
    array (
      0 => 'C:\\xampp_new\\htdocs\\myownproject\\smarty\\templates\\signup.tpl',
      1 => 1669147172,
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
function content_637d2a3072c864_33278883 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="container-fluid d-flex justify-content-center">
        <form action="" method="post" class='col-md-6'>
        <legend class="text-center">Zarejestruj się</legend>
        <div class="form-group row">
            <label for="name" class="col-sm-3 col-form-label">Imię:</label>
            <div class="col-sm-9">
                <input type="text" id="name" class="form-control" name="name" placeholder="Imię">
            </div>
        </div>
        <div class="form-group row mt-2">
            <label for="surname" class="col-sm-3 col-form-label">Nazwisko:</label>
            <div class="col-sm-9">
                <input type="text" id="surname" class="form-control" name="surname" placeholder="Nazwisko">
            </div>
        </div>

        <div class="form-group row mt-2">
            <label for="email" class="col-sm-3 col-form-label">Email:</label>
            <div class="col-sm-9">
                <input type="email" id="email" class="form-control" name="email" placeholder="Email">
            </div>
        </div>

        <div class="form-group row mt-2">
            <label for="password" class="col-sm-3 col-form-label">Hasło</label>
            <div class="col-sm-9">
                <input type="password" id="password" class="form-control" name="password" placeholder="Hasło">
            </div>
        </div>
        <div class="form-group row mt-2">
        <label for="confirmPassword" class="col-sm-3 col-form-label">Potwierdź hasło:</label>
        <div class="col-sm-9">
            <input type="password" id="confirmPassword" class="form-control" name="confirmPassword" placeholder="Powtórz hasło">
        </div>
    </div>
        <div class="row justify-content-center mt-2">
            <input type="hidden" name="signup" value="signup">
            <button type="submit" class="btn btn-primary col-md-3">Zatwierdź</button>

        </div>
    </form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
