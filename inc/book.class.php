<?php

declare(strict_types=1);
class Book extends MyDb
{

    public function allBooks(): array
    {
        return $this->myQuery(
            sql: "SELECT * FROM books ORDER BY id ASC;"
        );
    }

    private function inputData($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    private function validateForm($post)
    {
        $valuesArr = [];
        $errorArr = [];
        // $valErrArr = [];
        $titleErr = $authorErr = $pagesErr = $dateErr = '';
        $title = $author = $pages = $date = $image = '';
        // var_dump($_FILES);
        $allowed_image_extension = array(
            "png",
            "jpg",
            "jpeg"
        );
        $file_name = $_FILES['bookImage']['name'];
        $tmp_name = $_FILES['bookImage']['tmp_name'];
        echo $file_name;
        echo $tmp_name;
        // $file_name = $_FILES['file']['name'];
        // $tmp_name = $_FILES['file']['tmp_name'];
        // echo $file_name;
        // echo "<br/>";
        // echo $tmp_name;

        if (empty($post['addTitle'])) {
            $titleError = "Uzupełnij pole tytuł";
            $error = array_push($errorArr, $titleError);
            echo ($titleError);
        } else {
            $title = $this->inputData($post['addTitle']);
            if (!preg_match("/^[a-zA-Z ]*$/", $title)) {
                $titleErr = "Dozwolone tylko litery i białe znaki";
                $error = array_push($errorArr, $titleErr);
                echo $titleErr;
            } else {
                $valuesArr['title'] = $title;
                // print_r($valuesArr);
            }
        }

        if (empty($post['addAuthor'])) {
            $authorError = "Uzupełnij pole autor";
            $error = array_push($errorArr, $authorError);
            echo ($authorError);
        } else {
            $author = $this->inputData($post['addAuthor']);
            if (!preg_match("/^[a-zA-Z ]*$/", $author)) {
                $authorErr = "Dozwolone tylko litery i białe znaki ";
                $error = array_push($errorArr, $authorErr);
                echo $authorErr;
            } else {
                // $value = array_push($valuesArr, $author);
                $valuesArr['author'] = $author;
                // print_r($valuesArr);
            }
        }

        if (empty($post['totalPages'])) {
            $pagesErr = 'Uzupełnij pole liczba stron';
            $error = array_push($errorArr, $pagesErr);
        } else {
            $pages = intval($this->inputData($post['totalPages']));
            $valuesArr['pages'] = $pages;
        }   

        if (empty($post['releaseDate'])) {
            $dateErr = 'Uzupełnij pole rok publikacji';
            $error = array_push($errorArr, $dateErr);
        } else {
            $date = intval($this->inputData($post['releaseDate']));
            $valuesArr['date'] = $date;
        }   
        // return compact($valErrArr, $valuesArr );
        if (empty($errorArr)) {
            return $valuesArr;
        } else {
            return $errorArr;
        }
        // return $valuesArr;
    }
    public function addBook($book)
    {
        var_dump($this->validateForm($book));
        // print_r($book);

        // print($bookTitle);
        // header("LOCATION: http://localhost/myownproject/?page=start");
    }
}
