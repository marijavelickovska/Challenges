<?php

require_once 'DatabaseConnection.php';

class DVD extends Product
{
    public $size;

    public function setSize($size)
    {
        $this->size = $size;
    }

    public function getSize()
    {
        return $this->size;
    }



    public function create()
    {
        $sql = "INSERT INTO `products`(sku, name, price, productType) VALUES (:sku, :name, :price, :productType)";
        $stmt = $this->conn->prepare($sql);
        $product = ['sku' => $this->sku, 'name' => $this->name, 'price' => $this->price, 'productType' => $this->productType];
        $stmt->execute($product);
        $id = $this->conn->lastInsertId();
        if (isset($this->size)) {
            return $this->addAttributes($id, $this->size);
        }
        return $id;
    }

    public function addAttributes($id)
    {
        $sql = "INSERT INTO dvd (product_id, size) VALUES (:product_id, :size)";
        $stmt = $this->conn->prepare($sql);
        $dvd = ['product_id' => $id, 'size' => $this->size];
        if ($stmt->execute($dvd)) {
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
