<?php

require_once __DIR__ . "/../config.php";

class DatabaseConnection
{
    public $pdo;

    public function __construct()
    {
        try {
            $this->pdo = new PDO("mysql:host=127.0.0.1;dbname=" . DBNAME, DBUSER, DBPASS);
        } catch (PDOException $e) {
            file_put_contents('log.txt', $e->getMessage(), FILE_APPEND);
            die();
        }
    }
}
