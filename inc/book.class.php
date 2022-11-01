<?php 
declare(strict_types = 1);
class Book extends MyDb {

    public function allBooks() : array
    {
        return $this->myQuery(
            sql: "SELECT * FROM books ORDER BY id ASC;"
        );
    }
}