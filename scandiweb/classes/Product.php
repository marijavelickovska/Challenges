<?php

require_once 'DatabaseConnection.php';

abstract class Product
{

    public $conn;
    public $sku;
    public $name;
    public $price;
    public $productType;

    public function __construct()
    {
        $db = new DatabaseConnection;
        $this->conn = $db->pdo;
    }

    public function setSku($sku)
    {
        $this->sku = $sku;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function setProductType($productType)
    {
        $this->productType = $productType;
    }

    public function getSku()
    {
        return $this->sku;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getProductType()
    {
        return $this->productType;
    }



    abstract public function create();
    abstract public function addAttributes($id);
    abstract public function delete($id);
}
