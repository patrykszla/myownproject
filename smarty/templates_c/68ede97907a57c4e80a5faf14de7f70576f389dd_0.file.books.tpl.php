<?php
/* Smarty version 4.2.1, created on 2022-11-07 21:00:28
  from 'C:\xampp_new\htdocs\myownproject\smarty\templates\books.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_636963dc0a2283_94005664',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68ede97907a57c4e80a5faf14de7f70576f389dd' => 
    array (
      0 => 'C:\\xampp_new\\htdocs\\myownproject\\smarty\\templates\\books.tpl',
      1 => 1667851226,
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
function content_636963dc0a2283_94005664 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container-fluid">
    <div class="wrapper ">
        <div class="container-fluid">
            <div class="row">
                <div class="mt-3 col-md-12 d-flex justify-content-between">
                    <h2>Nasze ksiązki</h2>
                    <a href="?page=addnewbook" class="btn btn-success"><i class="bi bi-plus-lg"></i>Dodaj nową</a>
                </div>
            </div>

            <table class="table thead-dark table-striped">
                <thead>
                    <tr>

                        <th scope="col">#</th>
                        <th scope="col">Zdjecie</th>
                        <th scope="col">Tytuł</th>
                        <th scope="col">Autor</th>
                        <th scope="col">Liczba stron</th>
                        <th scope="col">Rok wydania</th>
                        <th scope="col">Akcja</th>
                    </tr>
                </thead>
                <tbody>


                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['books']->value, 'book', false, NULL, 'books', array (
));
$_smarty_tpl->tpl_vars['book']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['book']->value) {
$_smarty_tpl->tpl_vars['book']->do_else = false;
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['book']->value['id'];?>
</td>
                            <td><img src="assets/images/<?php echo $_smarty_tpl->tpl_vars['book']->value['image'];?>
" style="height: 70px"></img> </td>
                            <td><?php echo $_smarty_tpl->tpl_vars['book']->value['title'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['book']->value['author'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['book']->value['pages'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['book']->value['year'];?>
</td>
                            <td>
                                <a href="?page=edit&id=<?php echo $_smarty_tpl->tpl_vars['book']->value['id'];?>
"><i class="bi bi-pencil"></i></a>
                                <a href="#"><i class="bi bi-trash3"></i></a>
                            </td>
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
