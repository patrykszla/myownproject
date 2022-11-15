<?php
/* Smarty version 4.2.1, created on 2022-11-15 21:27:00
  from 'C:\xampp_new\htdocs\myownproject\smarty\templates\delete.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6373f6142c8da8_32603197',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '261a9737f2c2d44eeaa88f3ddf3580441a2a9247' => 
    array (
      0 => 'C:\\xampp_new\\htdocs\\myownproject\\smarty\\templates\\delete.tpl',
      1 => 1668544010,
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
function content_6373f6142c8da8_32603197 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container-fluid text-center">
    <h4>Podstrona delete</h4>
</div>



<div class="container-fluid">

    <table class="table thead-dark table-striped">
        <thead>
            <tr>

                <th scope="col">#</th>
                <th scope="col">Zdjecie</th>
                <th scope="col">Tytuł</th>
                <th scope="col">Autor</th>
                <th scope="col">Liczba stron</th>
                <th scope="col">Rok wydania</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['book']->value[0]['id'];?>
</td>
                <td><img src="assets/images/<?php echo $_smarty_tpl->tpl_vars['book']->value[0]['image'];?>
" style="height: 70px"></img> </td>
                <td><?php echo $_smarty_tpl->tpl_vars['book']->value[0]['title'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['book']->value[0]['author'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['book']->value[0]['pages'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['book']->value[0]['year'];?>
</td>

            </tr>
        </tbody>
    </table>
    <div class="container-fluid d-flex justify-content-center">
        <div class="flex-column">
            <div class="row">
                <p>Czy na pewno chcesz usunąc rekord?</p>
            </div>
            
                <form action="" method="post">
                <div class="row d-flex justify-content-around">
                    <input type="hidden" name="bookId" value=<?php echo $_smarty_tpl->tpl_vars['book']->value[0]['id'];?>
>
                    <button type="submit" class="btn btn-danger col-md-3" name="submitYes" value="yes">Tak</button>
                    <button type="submit" class="btn btn-primary col-md-3" name="submitNo" value="no">Nie</button>
                    </div>
                </form>
            
        </div>
    </div>

</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
