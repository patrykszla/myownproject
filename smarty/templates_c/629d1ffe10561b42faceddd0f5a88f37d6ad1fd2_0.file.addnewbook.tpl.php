<?php
/* Smarty version 4.2.1, created on 2022-11-13 16:35:06
  from 'C:\xampp_new\htdocs\myownproject\smarty\templates\addnewbook.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63710eaa6dace3_94678334',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '629d1ffe10561b42faceddd0f5a88f37d6ad1fd2' => 
    array (
      0 => 'C:\\xampp_new\\htdocs\\myownproject\\smarty\\templates\\addnewbook.tpl',
      1 => 1668351991,
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
function content_63710eaa6dace3_94678334 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container-fluid d-flex justify-content-center">


    <form action="" method="post" enctype="multipart/form-data" class="col-md-5">
        <legend class="text-center">Dodaj książke</legend>
        <div class="form-group row">
            <label for="addTitle" class="col-sm-3 col-form-label">Tytuł</label>
            <div class="col-sm-9">
                <input type="text" id="addTitle" class="form-control" name="addTitle" placeholder="Tytuł">
            </div>
        </div>
        <div class="form-group row mt-2">
            <label for="addAuthor" class="col-sm-3 col-form-label">Autor</label>
            <div class="col-sm-9">
                <input type="text" id="addAuthor" class="form-control" name="addAuthor" placeholder="Autor">
            </div>
        </div>
        <div class="form-group row mt-2">
            <label for="totalPages" class="col-sm-3 col-form-label">Liczba stron</label>
            <div class="col-sm-9">
                <input type="number" id="totalPages" class="form-control" name="totalPages" placeholder="Liczba stron">
            </div>
        </div>
        <div class="form-group row mt-2">
            <label for="releaseDate" class="col-sm-3 col-form-label">Rok publikacji</label>
            <div class="col-sm-9">
                <input type="number" id="releaseDate" class="form-control" name="releaseDate" placeholder="Rok publikacji">
            </div>
        </div>
        <div class="form-group row mt-2">
            <label for="bookImage" class="col-sm-3 col-form-label">Okładka</label>
            <div class="col-sm-9">
                <input type="file" id="bookImage" class="form-control" name="bookImage" value="plik">
            </div>
        </div>


        <div class="row justify-content-center mt-2">
            <input type="hidden" name="addBook" value="add">
            <button type="submit" class="btn btn-primary col-md-3">Zatwierdź</button>

        </div>
    </form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
