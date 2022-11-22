<?php

declare(strict_types=1);

class User extends MyDb
{
    private function inputData($data = '')
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    public function validateForm($post = []): array
    {
        // $password = $post['password'];
        // $pass = password_hash($post['password'], PASSWORD_DEFAULT);
        // $hashedPassword = password_hash('patka', PASSWORD_DEFAULT);
        // // $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        // if(password_verify($password, $hashedPassword)) {
        //     print("TAKIE SAME");
        // } else {
        //     print("INNE");
        // }

        $valuesArr = [];
        $errorArr = [];

        $nameErr = $surnameErr = $emailErr = $passwordErr = $confirmPasswordError = '';
        $nameVal = $surnameVal = $emailVal = $passwordVal = '';

        if (empty($post['name'])) {
            $nameErr = 'Uzupełnij pole imię';
            $error = array_push($errorArr, $nameErr);
        } else {
            $nameVal = strval($this->inputData($post['name']));
            // $valuesArr['name'] = $nameVal;
            if (!preg_match('/[a-zA-Z]/', $nameVal)) {
                $nameErr = "W polu imie dozwolone tylko litery a-z";
                $error = array_push($errorArr, $nameErr);
            } else {
                $valuesArr['name'] = $nameVal;
                // echo("<br/>");
                // print(strlen($nameVal));
            }
        }

        if (empty($post['surname'])) {
            $surnameErr = 'Uzupełnij pole nazwisko';
            $error = array_push($errorArr, $surnameErr);
        } else {
            $surnameVal = strval($this->inputData($post['surname']));
            if (!preg_match('/[a-zA-Z]/', $surnameVal)) {
                $surnameErr = 'W polu nazwisko dozwolone tylko litery a-z';
                $error = array_push($errorArr, $surnameErr);
            } else {
                $valuesArr['surname'] = $surnameVal;
            }
        }

        if (empty($post['email'])) {
            $emailErr = 'Uzupełnij pole email';
            $error = array_push($errorArr, $emailErr);
        } else {
            $emailVal = strval($this->inputData($post['email']));
            if (!filter_var($emailVal, FILTER_VALIDATE_EMAIL)) {
                $emailErr = 'Wpisz poprawny adres email';
                $error = array_push($errorArr, $emailErr);
            } else {
                $valuesArr['email'] = $emailVal;
            }
        }

        if (empty($post['password'])) {
            $passwordErr = 'Uzupełnij pole hasło';
            $error = array_push($errorArr, $passwordErr);
        } else {
            $passwordVal = trim($post['password']);
            $uppercase = preg_match('@[A-Z]@', $passwordVal);
            $lowercase = preg_match('@[a-z]@', $passwordVal);
            $number    = preg_match('@[0-9]@', $passwordVal);
            $specialChars = preg_match('@[^\w]@', $passwordVal);

            if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($passwordVal) < 6) {
                $passwordErr = 'Hasło musi zawierać minimum 6 znaków, jedną duża litere, jedną mała literę, jeden numer oraz jeden znak specjalny';
                $error = array_push($errorArr, $passwordErr);
            } else {
                $valuesArr['password'] = password_hash($passwordVal, PASSWORD_DEFAULT);
            }
        }

        if (empty($post['confirmPassword'])) {
            $confirmPasswordError = 'Uzupełnij pole powtórz hasło';
            $error = array_push($errorArr, $confirmPasswordError);
        } else {
            if (!($post['password'] == $post['confirmPassword'])) {
                $confirmPasswordError = 'Podane hasła się różnią';
                $error = array_push($errorArr, $confirmPasswordError);
            }
        }

        var_dump($valuesArr);
        var_dump($errorArr);

        $returnedArray = [
            "errorArr" => $errorArr,
            "valuesArr" => $valuesArr
        ];

        return $returnedArray;
    }

    public function signup() {
        
    }
}
