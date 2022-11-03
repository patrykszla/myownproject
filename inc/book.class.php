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

    public function validateForm($post)
    {
        $valuesArr = [];
        $errorArr = [];
        $titleErr = $authorErr = $pagesErr = $dataErr = '';
        $title = $author = $pages = $data = '';
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
                $valuesArr['bookTitle'] = $title;
                print_r($valuesArr);
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
                $valuesArr['bookTitle'] = $author;
                print_r($valuesArr);
            }
        }
        

    }
    public function addBook($book)
    {
        // print_r($book);

        // print($bookTitle);
        // header("LOCATION: http://localhost/myownproject/?page=start");
    }
}
