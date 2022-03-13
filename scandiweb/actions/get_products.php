<?php
require_once __DIR__ . "/../classes/DatabaseConnection.php";


if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header("Location: index.php");
};

$db = new DatabaseConnection;
$sql = "SELECT products.*, dvd.size as size, book.weight as weight, furniture.height as height, furniture.width as width, furniture.lenght as lenght FROM products
        LEFT JOIN dvd ON products.id = dvd.product_id
        LEFT JOIN book ON products.id = book.product_id
        LEFT JOIN furniture ON products.id = furniture.product_id
        ORDER BY products.id DESC";
$stmt = $db->pdo->prepare($sql);
$stmt->execute();
$allProducts = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($allProducts);



