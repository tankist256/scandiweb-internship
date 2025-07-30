<?php
namespace App\Model\Product;

class DVD extends Product
{
    private $size;
    
    public function __construct($sku, $name, $price, $size) {
        parent::__construct($sku, $name, $price, 'DVD');
        $this->size = $size;
    }
    
    public function save() {
        $db = self::getDb();
        $stmt = $db->prepare("
            INSERT INTO products (sku, name, price, type, size)
            VALUES (:sku, :name, :price, :type, :size)
        ");
        return $stmt->execute([
            ':sku' => $this->sku,
            ':name' => $this->name,
            ':price' => $this->price,
            ':type' => $this->type,
            ':size' => $this->size
        ]);
    }
    
    public static function getAll() {
        $db = self::getDb();
        $stmt = $db->query("SELECT * FROM products WHERE type = 'DVD'");
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