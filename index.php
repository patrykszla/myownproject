<?php

use PHPMailer\PHPMailer\{PHPMailer, SMTP, Exception};

require_once __DIR__ . "/libs/vendor/autoload.php";


$smarty = new Smarty;
$mail = new PHPMailer(true);

$smarty->setTemplateDir('smarty/templates');
$smarty->setCompileDir('smarty/templates_c');
$smarty->setCacheDir('smarty/cache');
$smarty->setConfigDir('smarty/configs');

// $smarty->testInstall();
require_once 'inc/db.class.php';
require_once 'inc/book.class.php';

// print_r($_GET);
$page = isset($_GET['page']) ? $_GET['page'] : '';
$smarty->assign('page', $page);

$project = new Book();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // $project->validateForm($_POST);
    if (isset($_POST['editId'])) {
        $project->updateBook($_POST);
    } else {
        $project->addBook($_POST);
        // var_dump($_POST);
        echo "<br />";
    }
    // if($_POST['insert'] = 'insert') {

    // } elseif(!empty($_POST['editId'])) {
    //     $project->updateBook($_POST);
    // }

    // var_dump($_POST);


    echo "<br />";
    // print_r($_POST);
}
switch ($page) {
    case 'books':
        $search = (isset($_POST['search'])) ? trim(strip_tags($_POST['search'])) : '';
        $books = $project->search(search: $search);
        $searchBooks = $project->search(search: $search);
        $smarty->assign('search', $search);
        $smarty->assign('books', $books);
        $smarty->assign('title', 'Lista dostępnych książek');
        $smarty->display('books.tpl');
        break;

    case 'addnewbook':
        $smarty->assign('title', 'Dodaj nową ksiązkę');
        $smarty->display('addnewbook.tpl');
        break;

    case 'edit':
        $book = $project->singleBook($_GET['book_id']);
        $smarty->assign('title', 'Edycja książki');
        $smarty->assign('book', $book);
        $smarty->display('edit.tpl');
        break;

    case 'delete':
        $bookId = $_GET['book_id'];
        $book = $project->singleBook($bookId);

        if(isset($_POST['submitYes'])) {
            $project->deleteBook($_POST);
        } elseif(isset($_POST['submitNo'])) {
            print("NO");
            header('Location: http://localhost/myownproject/?page=start');
        }
        // var_dump($_POST);
        // var_dump($book);
        $smarty->assign('book', $book);
        $smarty->assign('title', 'Usuwanie książki');
        $smarty->display('delete.tpl');
        break;

    default:
        $smarty->assign('title', 'Biblioteka online');
        $smarty->display('index.tpl');
}

// $smarty->assign('page', $page);