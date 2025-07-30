<?php
namespace App\Model\Product;

abstract class Product {
    protected $sku;
    protected $name;
    protected $price;
    protected $type;
    
    public function __construct($sku, $name, $price, $type) {
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->type = $type;
    }
    
    abstract public function save();
    abstract public static function getAll();
    abstract public static function delete($ids);
    
    public static function getProductTypes() {
        return ['DVD', 'Book', 'Furniture'];
    }
    
    protected static function getDb() {
        return \App\Database\Database::getInstance();
    }
}