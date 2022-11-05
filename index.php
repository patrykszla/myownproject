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



// $smarty->display('index.tpl');
// $smarty->display('books.tpl');
$page = isset($_GET['page']) ? $_GET['page'] : '';
// print($page);

$smarty->assign('page', $page);

// print_r($_POST);
$project = new Book();


if($_SERVER["REQUEST_METHOD"] == "POST")
{
    // $project->validateForm($_POST);
    $project->addBook($_POST);
    echo "<br />";
    print_r($_POST);
}
switch ($page) {
    case 'books':
        // $search = (isset($_POST['search'])) ? trim(strip_tags($_POST['search'])) : '';
        // print_r($search);
        $books = $project->allBooks();
        $smarty->assign('books', $books);
        $smarty->assign('title', 'Lista dostępnych książek');
        $smarty->display('books.tpl');
        break;

    case 'addnewbook':
        $smarty->assign('title', 'Dodaj nową ksiązkę');
        $smarty->display('addnewbook.tpl');
        break;

    case 'read':
        $smarty->assign('title', 'Szczegóły ksiązki');
        $smarty->display('read.tpl');
        break;

    case 'edit':
        $smarty->assign('title', 'Edycja książki');
        $smarty->display('edit.tpl');
        break;

    default:
        $smarty->assign('title', 'Biblioteka online');
        $smarty->display('index.tpl');
}

// $smarty->assign('page', $page);