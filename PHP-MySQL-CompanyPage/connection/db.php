<?php

require_once __DIR__ . "/consts.php";

try {
    $conn = new PDO("mysql:host=localhost;dbname="  . DBNAME, DBUSER, DBPASS);
} catch (PDOException $e) {
    echo "Can not connect to database";
    file_put_contents('log.txt', $e->getMessage(), FILE_APPEND);
    die();
}