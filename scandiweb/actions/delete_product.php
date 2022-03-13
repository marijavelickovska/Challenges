<?php
require_once __DIR__ . "/../classes/DatabaseConnection.php";
require_once __DIR__ . "/../classes/Product.php";
require_once __DIR__ . "/../classes/DVD.php";
require_once __DIR__ . "/../classes/Book.php";
require_once __DIR__ . "/../classes/Furniture.php";

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header("Location: index.php");
};


//this is one way of deleting the products, with using methods from the classes

// $data = $_POST['data'];
// print_r($data);
// die();

// foreach ($data as $product) {
    // echo $product['id'];
    // echo $product['productType'];

//     if ($product['productType'] == "DVD") {
//         $deleteDVD = new DVD();
//         $deleteDVD->delete($product['id']);
//     }
//     if ($product['productType'] == "Book") {
//         $deleteBook = new Book();
//         $deleteBook->delete($product['id']);
//     }
//     if ($product['productType'] == "Furniture") {
//         $deleteFurniture = new Furniture();
//         $deleteFurniture->delete($product['id']);
//     }
// }




//this is the second way of deleting the products, without using methods from the classes
$db = new DatabaseConnection;

$data = $_POST['data'];
foreach ($data as $product) {
    $id = $product['id'];
    $sql = "DELETE FROM products WHERE id = :id";
    $stmt = $db->pdo->prepare($sql);
    $stmt->execute(['id' => $id]);
}
