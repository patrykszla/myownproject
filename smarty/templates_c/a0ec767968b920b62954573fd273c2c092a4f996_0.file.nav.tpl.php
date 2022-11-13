<?php
/* Smarty version 4.2.1, created on 2022-11-13 11:19:51
  from 'C:\xampp_new\htdocs\myownproject\smarty\templates\nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6370c4c742de55_86246207',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0ec767968b920b62954573fd273c2c092a4f996' => 
    array (
      0 => 'C:\\xampp_new\\htdocs\\myownproject\\smarty\\templates\\nav.tpl',
      1 => 1668334790,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6370c4c742de55_86246207 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-expand-lg navbar-dark navbar-light" style="background-color:#484848">
    <div class="container-fluid d-flex justify-content-center">
        <div class="container d-flex justify-content-between">
            <a class="navbar-brand" href="?page=start">Biblioteka <i class="bi bi-book"></i></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="?page=books" class="nav-link">Ksiazki</a>
                    </li>
                    <li class="nav-item">
                        <a href="?page=addnewbook" class="nav-link">Dodaj książkę</a>
                    </li>
                </ul>
            </div>
            <form action="" id="form" method="post" class="d-flex">
                <input class="form-control me-2" type="search" name="search" placeholder="Szukaj" aria-label="szukaj">
                <button class="btn btn-outline-light" type="submit" disabled>Szukaj</button>
                <input type="hidden" name="page" value="books">
            </form>

        </div>
    </div>
</nav><?php }
}
