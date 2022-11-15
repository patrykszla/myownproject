<?php

declare(strict_types=1);
class Book extends MyDb
{

    // public $valuesArr = [];
    // public $errorArr = []; 

    public function allBooks(): array
    {
        return $this->myQuery(
            sql: "SELECT * FROM books ORDER BY id ASC;"
        );
    }

    public function singleBook($id): array
    {
        return $this->myQuery(
            sql: "SELECT * FROM books WHERE id = $id;"
        );
    }
    public function search(string $search = ''): array
    {
        if ($search != '') {
            $search = preg_replace('/[^0-9 a-z-!_\\p{L}]/u', '', $search);
        }
        return $this->searchFromBooks(
            sql: "
        SELECT id, author, title, pages, year, image
        FROM books WHERE author LIKE ? OR title LIKE ? ORDER BY id ASC;",
            search: $search
        );
    }

    private function inputData($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    private function validateForm($post): array
    {
        $valuesArr = [];
        $errorArr = [];
        $titleErr = $authorErr = $pagesErr = $dateErr = $imageErr = '';
        $title = $author = $pages = $date = $image = '';

        if (empty($post['addTitle'])) {
            $titleError = "Uzupełnij pole tytuł";
            $error = array_push($errorArr, $titleError);
        } else {
            $title = $this->inputData($post['addTitle']);
            if (!preg_match("/([a-zA-Z0-9])/", $title)) {
                $titleErr = "Dozwolone tylko litery i białe znaki";
                $error = array_push($errorArr, $titleErr);
            } else {
                $valuesArr['title'] = $title;
            }
        }

        if (empty($post['addAuthor'])) {
            $authorError = "Uzupełnij pole autor";
            $error = array_push($errorArr, $authorError);
        } else {
            $author = $this->inputData($post['addAuthor']);
            if (!preg_match("/^[a-zA-Z ]*$/", $author)) {
                $authorErr = "Dozwolone tylko litery i białe znaki ";
                $error = array_push($errorArr, $authorErr);
            } else {
                $valuesArr['author'] = $author;
            }
        }

        if (empty($post['totalPages'])) {
            $pagesErr = 'Uzupełnij pole liczba stron';
            $error = array_push($errorArr, $pagesErr);
        } elseif (!is_numeric($this->inputData($post['totalPages']))) {
            $pagesErr = 'Ilość stron musi być liczbą!';
            $error = array_push($errorArr, $pagesErr);
        } else {
            $pages = intval($this->inputData($post['totalPages']));
            $valuesArr['pages'] = $pages;
        }

        if (empty($post['releaseDate'])) {
            $dateErr = 'Uzupełnij pole rok publikacji';
            $error = array_push($errorArr, $dateErr);
        } elseif (!is_numeric($post['releaseDate'])) {
            $dateErr = 'Rok musi być liczbą!';
            $error = array_push($errorArr, $dateErr);
        } else {
            $date = intval($this->inputData($post['releaseDate']));
            $valuesArr['date'] = $date;
        }

        if ($_GET['page'] == 'addnewbook') {
            if ($_FILES['bookImage']['size'] == 0) {
                $imageErr = 'Dodaj zdjęcie!';
                $error = array_push($errorArr, $imageErr);
            } else {
                $allowed_image_extension = array(
                    "png",
                    "jpg",
                    "jpeg"
                );
                $file_name = $_FILES['bookImage']['name'];
                $tmp_name = $_FILES['bookImage']['tmp_name'];
                $upload_dir = 'assets/images/';
                $file_extension = pathinfo($file_name, PATHINFO_EXTENSION);
                if (!in_array($file_extension, $allowed_image_extension)) {
                    $imageErr = 'Dozwolone tylko formaty pliku PNG, JPG JPEG';
                    $error = array_push($errorArr, $imageErr);
                } else {
                    $imageName = rand(1000, 100000) . "." . $file_extension;
                    $image = [
                        'imageName' => $imageName,
                        'tmp_name' => $tmp_name,
                        'upload_dir' => $upload_dir
                    ];
                    $valuesArr['image'] = $image;
                }
            }
        } elseif ($_GET['page'] == 'edit') {
            if ($_FILES['bookImage']['size'] != 0 && $_FILES['bookImage']['error'] == 0) {
                $allowed_image_extension = array(
                    "png",
                    "jpg",
                    "jpeg"
                );
                $file_name = $_FILES['bookImage']['name'];
                $tmp_name = $_FILES['bookImage']['tmp_name'];
                $upload_dir = 'assets/images/';
                $file_extension = pathinfo($file_name, PATHINFO_EXTENSION);
                if (!in_array($file_extension, $allowed_image_extension)) {
                    $imageErr = 'Dozwolone tylko formaty pliku PNG, JPG JPEG';
                    $error = array_push($errorArr, $imageErr);
                } else {
                    $imageName = rand(1000, 100000) . "." . $file_extension;
                    $image = [
                        'imageName' => $imageName,
                        'tmp_name' => $tmp_name,
                        'upload_dir' => $upload_dir
                    ];
                    $valuesArr['image'] = $image;
                }
            }
        }

        $returnedArray = [
            "errorArr" => $errorArr,
            "valuesArr" => $valuesArr
        ];

        return $returnedArray;
    }

    public function addBook($book): void
    {

        $returnedArray = $this->validateForm($book);
        $errorArr = $returnedArray['errorArr'];
        $valuesArr = $returnedArray['valuesArr'];

        /// SPROBOWAC TEZ Z ARRAY FILTER
        if (empty($errorArr) && !empty($valuesArr)) {
            $imageArr = $valuesArr['image'];
            move_uploaded_file($imageArr['tmp_name'], $imageArr['upload_dir'] . $imageArr['imageName']);
            try {
                if (file_exists($imageArr['upload_dir'] . $imageArr['imageName'])) {

                    $sql = 'INSERT INTO books (title, author, pages, year, image) VALUES (:title, :author, :pages, :year, :image)';
                    $stmt = $this->db_pdo->prepare($sql);
                    $stmt->bindParam(":title", $valuesArr['title'], PDO::PARAM_STR);
                    $stmt->bindParam("author", $valuesArr['author'], PDO::PARAM_STR);
                    $stmt->bindParam(":pages", $valuesArr['pages'], PDO::PARAM_INT);
                    $stmt->bindParam(":year", $valuesArr['date'], PDO::PARAM_INT);
                    $stmt->bindParam(":image", $imageArr['imageName'], PDO::PARAM_STR);
                    $stmt->execute();
                    print('Udało się');
                }
            } catch (PDOException $e) {
                echo $e->getMessage();
                die();
            }
        } else {
            print_r($errorArr);
        }
    }

    public function updateBook($book): void
    {
        $returnedArray = $this->validateForm($book);
        $errorArr = $returnedArray['errorArr'];
        $valuesArr = $returnedArray['valuesArr'];
        $currentBookImage = $this->singleBook(intval($_GET['book_id']))[0]['image'];

        if (empty($errorArr) && !empty($valuesArr)) {
            if (isset($valuesArr['image']['imageName'])) {
                $imageArr = $valuesArr['image'];
                move_uploaded_file($imageArr['tmp_name'], $imageArr['upload_dir'] . $imageArr['imageName']);
                $path = './' . $imageArr['upload_dir'] . $currentBookImage;
                unlink($path);
                $imageFileName  = strval($imageArr['imageName']);
                var_dump($imageFileName);
            } else {
                $imageFileName = strval($currentBookImage);
            }
            $id = intval($_GET['book_id']);
        }
        try {
            $sql = 'UPDATE books SET title = :title, author = :author, pages = :pages, year = :year, image = :image WHERE id = :id';
            $stmt = $this->db_pdo->prepare($sql);
            $stmt->bindParam(":title", $valuesArr['title'], PDO::PARAM_STR);
            $stmt->bindParam(":author", $valuesArr['author'], PDO::PARAM_STR);
            $stmt->bindParam(":pages", $valuesArr['pages'], PDO::PARAM_INT);
            $stmt->bindParam(":year", $valuesArr['date'], PDO::PARAM_INT);
            $stmt->bindParam('image', $imageFileName, PDO::PARAM_STR);
            $stmt->bindParam(":id", $id, PDO::PARAM_INT);

            $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
            die();
        }
    }

    public function deleteBook($which = []) :void {
        // print($id);
        $book = $this->singleBook($which['bookId']);

        try {
            $sql = 'DELETE FROM books where id = :id';
            $stmt = $this->db_pdo->prepare('DELETE FROM books where id = :id');
            $stmt->bindParam(":id", $which['bookId'], PDO::PARAM_STR);
            $stmt->execute();
            $msg = 'Usunałes ksiązkę';
        } catch (PDOException $e) {
            echo $e->getMessage();
            die();
        }
        var_dump($book);
        header('Location: http://localhost/myownproject/?page=start');
        // var_dump( $this->singleBook($id));
    }
}
