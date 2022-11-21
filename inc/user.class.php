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

    public function validateForm($post = []) : array {
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
        
        $nameErr = $surnameErr = $emailErr = $passwordErr = '';
        $nameVal = $surnameVal = $emailVal = $passwordVal = '';

        if(empty($post['name'])) {
           $nameErr = 'Uzupełnij pole imię';
           $error = array_push($errorArr, $nameErr);
        } else {
            $nameVal = $this->validateForm($post['name']);
            $valuesArr['name'] = $nameVal;
        }

        var_dump($valuesArr);
        var_dump($errorArr);

        $returnedArray = [
            "errorArr" => $errorArr,
            "valuesArr" => $valuesArr
        ];

         return $returnedArray;

    }

}
