<?php
namespace App\Model\Product;

class Book extends Product
{
    private $weight;
    
    public function __construct($sku, $name, $price, $weight) {
        parent::__construct($sku, $name, $price, 'Book');
        $this->weight = $weight;
    }
    
    public function save() {
        $db = self::getDb();
        $stmt = $db->prepare("
            INSERT INTO products (sku, name, price, type, weight)
            VALUES (:sku, :name, :price, :type, :weight)
        ");
        return $stmt->execute([
            ':sku' => $this->sku,
            ':name' => $this->name,
            ':price' => $this->price,
            ':type' => $this->type,
            ':weight' => $this->weight
        ]);
    }
    
    public static function getAll() {
        $db = self::getDb();
        $stmt = $db->query("SELECT * FROM products WHERE type = 'Book'");
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
    
    public static function delete($ids) {
        if (empty($ids)) return;
        
        $db = self::getDb();
        $placeholders = implode(',', array_fill(0, count($ids), '?'));
        $stmt = $db->prepare("DELETE FROM products WHERE id IN ($placeholders)");
        $stmt->execute($ids);
    }
}