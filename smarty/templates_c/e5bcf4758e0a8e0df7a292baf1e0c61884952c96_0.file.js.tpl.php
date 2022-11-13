<?php
/* Smarty version 4.2.1, created on 2022-11-13 11:16:57
  from 'C:\xampp_new\htdocs\myownproject\smarty\templates\js.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6370c4194799f6_20199314',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5bcf4758e0a8e0df7a292baf1e0c61884952c96' => 
    array (
      0 => 'C:\\xampp_new\\htdocs\\myownproject\\smarty\\templates\\js.tpl',
      1 => 1668334591,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6370c4194799f6_20199314 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
    integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.2/js/bootstrap.min.js"
    integrity="sha512-5BqtYqlWfJemW5+v+TZUs22uigI8tXeVah5S/1Z6qBLVO7gakAOtkOzUtgq6dsIo5c0NJdmGPs0H9I+2OHUHVQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $(function() {
        $('input:first', '#form').on('input', function() {
            var msg = $(this).val();
            $('button:first', '#form').attr("disabled", (msg.length > 0) ? false : true);
        });
    });
<?php echo '</script'; ?>
><?php }
}
