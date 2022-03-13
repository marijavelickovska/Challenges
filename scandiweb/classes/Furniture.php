<?php

require_once 'DatabaseConnection.php';
require_once 'Product.php';

class Furniture extends Product {
    public $height;
    public $width;
    public $lenght;


    public function setHeight($height) {
        $this->height = $height;
    }
    public function setWidth($width) {
        $this->width = $width;
    }
    public function setLenght($lenght) {
        $this->lenght = $lenght;
    }
    public function getHeight() {
        return $this->height;
    }
    public function getWidth() {
        return $this->width;
    }
    public function getLenght() {
        return $this->lenght;
    }

    


    public function create()
    {
        $sql = "INSERT INTO `products`(sku, name, price, productType) VALUES (:sku, :name, :price, :productType)";
        $stmt = $this->conn->prepare($sql);
        $product = ['sku' => $this->sku, 'name' => $this->name, 'price' => $this->price, 'productType' => $this->productType];
        $stmt->execute($product);
        $id = $this->conn->lastInsertId();
        if (isset($this->height) && isset($this->width) && isset($this->lenght)) {
            return $this->addAttributes($id, $this->height, $this->width, $this->lenght);
        }
        return $id;
    }

    public function addAttributes($id)
    {
        $sql = "INSERT INTO furniture (product_id, height, width, lenght) VALUES (:product_id, :height, :width, :lenght)";
        $stmt = $this->conn->prepare($sql);
        $furniture = ['product_id' => $id, 'height' => $this->height, 'width' => $this->width, 'lenght' => $this->lenght];
        if ($stmt->execute($furniture)) {
            return true;
        }
        return false;
    }


    public function delete($id)
    {
        $sql = "DELETE FROM products WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        if ($stmt->execute(['id' => $id])) {
            return true;
        }
        return false;
    }
}