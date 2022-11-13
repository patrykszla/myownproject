<?php
/* Smarty version 4.2.1, created on 2022-11-13 19:55:08
  from 'C:\xampp_new\htdocs\myownproject\smarty\templates\edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63713d8cdb3279_67514108',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e6e8bd4a34ea68a3e41010ba9eeb7c04ba048a0' => 
    array (
      0 => 'C:\\xampp_new\\htdocs\\myownproject\\smarty\\templates\\edit.tpl',
      1 => 1668365707,
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
function content_63713d8cdb3279_67514108 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container-fluid">
    <h4>Podstrona edit</h4>
</div>



<div class="container-fluid d-flex justify-content-center">


    <form action="" method="post" enctype="multipart/form-data" class="col-md-7">
        <legend class="text-center">Edycja</legend>
        <div class="row">
            <div class="col-md-8">
                <div class="form-group row mt-2">
                    <label for="addTitle" class="col-sm-3 col-form-label">Tytuł</label>
                    <div class="col-sm-9">
                        <input type="text" id="addTitle" class="form-control" name="addTitle" placeholder="Tytuł"
                            value="<?php echo $_smarty_tpl->tpl_vars['book']->value[0]['title'];?>
">
                    </div>
                </div>
                <div class="form-group row mt-2">
                    <label for="addAuthor" class="col-sm-3 col-form-label">Autor</label>
                    <div class="col-sm-9">
                        <input type="text" id="addAuthor" class="form-control" name="addAuthor" placeholder="Autor"
                            value="<?php echo $_smarty_tpl->tpl_vars['book']->value[0]['author'];?>
">
                    </div>
                </div>
                <div class="form-group row mt-2">
                    <label for="totalPages" class="col-sm-3 col-form-label">Liczba stron</label>
                    <div class="col-sm-9">
                        <input type="number" id="totalPages" class="form-control" name="totalPages"
                            placeholder="Liczba stron" value="<?php echo $_smarty_tpl->tpl_vars['book']->value[0]['pages'];?>
">
                    </div>
                </div>
                <div class="form-group row mt-2">
                    <label for="releaseDate" class="col-sm-3 col-form-label">Rok publikacji</label>
                    <div class="col-sm-9">
                        <input type="number" id="releaseDate" class="form-control" name="releaseDate"
                            placeholder="Rok publikacji" value="<?php echo $_smarty_tpl->tpl_vars['book']->value[0]['year'];?>
">
                    </div>
                </div>
                <div class="form-group row mt-2">
                    <label for="bookImage" class="col-sm-3 col-form-label">Okładka</label>
                    <div class="col-sm-9">
                        <input type="file" id="bookImage" class="form-control" name="bookImage" value="plik">
                    </div>
                </div>
                <div class="row justify-content-center mt-2">
                    <input type="hidden" name="editId" value="<?php echo $_smarty_tpl->tpl_vars['book']->value[0]['id'];?>
">
                    <button type="submit" class="btn btn-primary col-md-3">Zatwierdź</button>

                </div>
            </div>
            <div class="col-md-4 mt-2">
            <img src="assets/images/<?php echo $_smarty_tpl->tpl_vars['book']->value[0]['image'];?>
" alt="" style="height:300px; width:100%;">
            </div>
        </div>
    </form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
