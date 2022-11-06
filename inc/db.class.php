<?php
abstract class MyDb
{
    public $db_pdo;

    public function __construct()
    {
        try {
            $db_server = 'localhost';
            $db_name = 'library';
            $db_user = 'root';
            $db_password = '';

            $this->db_pdo = new PDO(
                "mysql:host=$db_server;dbname=$db_name",
                $db_user,
                $db_password,
                [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"]
            );

            $this->db_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            print "Błąd!: " . $e->getMessage();
            die();
        }
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
