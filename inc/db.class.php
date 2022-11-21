<?php

require_once './config.php';

abstract class MyDb
{
    public $db_pdo;
   
    // "mysql:host=$db_server;dbname=$db_name",
    //             $db_user,
    //             $db_password,

    public function __construct()
    {
        try {
            $this->db_pdo = new PDO(
                "mysql:host=".DB_SERVER.";dbname=".DB_NAME,
                DB_USER,
                DB_PASSWORD,
                [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"]
            );

            $this->db_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            print "Błąd!: " . $e->getMessage();
            die();
        }
    }

    public function searchFromBooks(string $sql, ?string $search = ''): array
    {
        $stmt = $this->db_pdo->prepare($sql);
        $stmt->execute(["%$search%", "%$search%"]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function __destruct()
    {
        $this->db_pdo = NULL;
    }

    public function myQuery(string $sql): array
    {
        return $this->db_pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
}
