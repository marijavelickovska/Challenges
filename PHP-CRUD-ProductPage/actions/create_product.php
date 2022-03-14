<?php
require_once __DIR__ . "/../classes/Product.php";
require_once __DIR__ . "/../classes/DVD.php";
require_once __DIR__ . "/../classes/Book.php";
require_once __DIR__ . "/../classes/Furniture.php";

//Validation
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header("Location: index.php");
};

//Create new product
$created = false;
$type = $_POST['productType'];
$product = new $type();
$product->setSku($_POST['sku']);
$product->setName($_POST['name']);
$product->setPrice($_POST['price']);
$product->setProductType($_POST['productType']);

if ($type == "DVD") {
    $product->setSize($_POST['size']);
}
if ($type == "Book") {
    $product->setWeight($_POST['weight']);
}
if ($type == "Furniture") {
    $product->setHeight($_POST['height']);
    $product->setWidth($_POST['width']);
    $product->setLength($_POST['length']);
}

if ($product->create()) {
    $created = true;
} else {
    $created = false;
}


//send message for successfully created product or some error ocured
if ($created) {
    echo json_encode(['message' => 'success']);
} else {
    echo json_encode(['message' => 'error']);
}
