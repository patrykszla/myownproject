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
require_once 'inc/user.class.php';

$page = isset($_GET['page']) ? $_GET['page'] : '';
$smarty->assign('page', $page);

$project = new Book();
$user = new User();
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     if (isset($_POST['editId'])) {
//         $project->updateBook($_POST);
//     } else {
//         $project->addBook($_POST);
//         echo "<br />";
//     }
// }
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
        if ($_SERVER["REQUEST_METHOD"] == "POST") { 
            if(isset($_POST['addBook'])) {
                $project->addBook($_POST);
            }
        }
        $smarty->assign('title', 'Dodaj nową ksiązkę');
        $smarty->display('addnewbook.tpl');
        break;

    case 'edit':
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['editId'])) {
                $project->updateBook($_POST);
            }
        }
        $book = $project->singleBook($_GET['book_id']);
        $smarty->assign('title', 'Edycja książki');
        $smarty->assign('book', $book);
        $smarty->display('edit.tpl');
        break;

    case 'delete':
        $bookId = $_GET['book_id'];
        $book = $project->singleBook($bookId);
        if (!empty($_POST)) {
            $project->deleteBook($_POST);
        }

        $smarty->assign('book', $book);
        $smarty->assign('title', 'Usuwanie książki');
        $smarty->display('delete.tpl');
        break;

    case 'signup':
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // var_dump($_POST);
            // $user->validateForm($_POST);
            $returned = $user->validateForm($_POST);
            // var_dump($user->validateForm($_POST));
            // var_dump($returned['errorArr']);
            
        }
        $smarty->assign('title', 'Rejestracja');
        $smarty->display('signup.tpl');
        break;

    default:
        $smarty->assign('title', 'Biblioteka online');
        $smarty->display('index.tpl');
}
