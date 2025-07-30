<?php
namespace App\Model\Product;

class Furniture extends Product {
    private $height;
    private $width;
    private $length;
    
    public function __construct($sku, $name, $price, $height, $width, $length) {
        parent::__construct($sku, $name, $price, 'Furniture');
        $this->height = $height;
        $this->width = $width;
        $this->length = $length;
    }
    
    public function save() {
        $db = self::getDb();
        $stmt = $db->prepare("
            INSERT INTO products (sku, name, price, type, height, width, length)
            VALUES (:sku, :name, :price, :type, :height, :width, :length)
        ");
        return $stmt->execute([
            ':sku' => $this->sku,
            ':name' => $this->name,
            ':price' => $this->price,
            ':type' => $this->type,
            ':height' => $this->height,
            ':width' => $this->width,
            ':length' => $this->length
        ]);
    }
    
    public static function getAll() {
        $db = self::getDb();
        $stmt = $db->query("SELECT * FROM products WHERE type = 'Furniture'");
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