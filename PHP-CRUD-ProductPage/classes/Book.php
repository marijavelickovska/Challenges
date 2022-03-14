<?php

require_once 'DatabaseConnection.php';
require_once 'Product.php';

class Book extends Product
{
    public $weight;
    

    public function setWeight($weight) {
        $this->weight = $weight;
    }
    public function getWeight() {
        return $this->weight;
    }

    

    public function create()
    {
        $sql = "INSERT INTO `products`(sku, name, price, productType) VALUES (:sku, :name, :price, :productType)";
        $stmt = $this->conn->prepare($sql);
        $product = ['sku' => $this->sku, 'name' => $this->name, 'price' => $this->price, 'productType' => $this->productType];
        $stmt->execute($product);
        $id = $this->conn->lastInsertId();
        if (isset($this->weight)) {
            return $this->addAttributes($id, $this->weight);
        }
        return $id;
        
    }

    public function addAttributes($id)
    {
        $sql = "INSERT INTO book (product_id, weight) VALUES (:product_id, :weight)";
        $stmt = $this->conn->prepare($sql);
        $book = ['product_id' => $id, 'weight' => $this->weight];
        if ($stmt->execute($book)) {
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
