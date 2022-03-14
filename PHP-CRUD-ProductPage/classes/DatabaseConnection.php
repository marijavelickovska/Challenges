<?php

require_once __DIR__ . "/../config.php";

class DatabaseConnection
{
    public $pdo;

    public function __construct()
    {
        try {
            $this->pdo = new PDO("mysql:host=".DB_HOST.";dbname=" . DBNAME, DBUSER, DBPASS);
        } catch (PDOException $e) {
            file_put_contents('log.txt', $e->getMessage(), FILE_APPEND);
            die();
        }
    }
}
