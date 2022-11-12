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

    public function singleBook($id): array
    {
        return $this->myQuery(
            sql: "SELECT * FROM books WHERE id = $id;"
        );
    }

   
    private function inputData($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    private function validateImage($array) {
        
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



        if (!isset($post['editId'])) {
            if (empty($_FILES)) {
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
        }


        if (isset($post['editId'])) {
            $valuesArr['editId'] = $post['editId'];
        }

        $returnedArray = [
            "errorArr" => $errorArr,
            "valuesArr" => $valuesArr
        ];
        // return compact($valErrArr, $valuesArr );
        // if (empty($errorArr)) {
        //     return $valuesArr;
        // } else {
        //     return $errorArr;
        // }
        // return $valuesArr;
        return $returnedArray;
    }
    public function addBook($book): void
    {

        $returnedArray = $this->validateForm($book);
        $errorArr = $returnedArray['errorArr'];
        $valuesArr = $returnedArray['valuesArr'];
        var_dump($returnedArray);
        // if (empty($returnedArray['errorArr'])) {
        //     var_dump($returnedArray['errorArr']);
        // }
        // if ( !empty($returnedArray['valuesArr'])) {
        //     var_dump($returnedArray['valuesArr']);
        // }
        // if(!empty($errorArr)) {
        //     var_dump($errorArr);
        // }
        /// SPROBOWAC TEZ Z ARRAY FILTER
        if (empty($errorArr) && !empty($valuesArr)) {
            $imageArr = $valuesArr['image'];
            // var_dump($returnedArray);
            // var_dump($imageArr);
            move_uploaded_file($imageArr['tmp_name'], $imageArr['upload_dir'] . $imageArr['imageName']);
            try {
                if (file_exists($imageArr['upload_dir'] . $imageArr['imageName'])) {

                    // echo 'plik istnieje';
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

            // if (empty($returnedArray['errorArr']) && !empty($returnedArray['valuesArr'])) {
            //     var_dump($returnedArray);

            //     move_uploaded_file($tmp_name, $upload_dir . $imageName);
            // }
            // if (!empty($errorArr))
            // print_r($book);

            // print($bookTitle);
            // header("LOCATION: http://localhost/myownproject/?page=start");
        } else {
            print_r($errorArr);
        }
    }

    public function updateBook($book): void
    {

        // print("UPDATE BOOOK");
        $returnedArray = $this->validateForm($book);
        var_dump($returnedArray);
    }
}
