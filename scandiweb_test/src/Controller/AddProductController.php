<?php
namespace App\Controller;

use App\Model\Product\DVD;
use App\Model\Product\Book;
use App\Model\Product\Furniture;
use App\Validation\Validator;

class AddProductController {
    public function index() {
        $productTypes = \App\Model\Product\Product::getProductTypes();
        require __DIR__ . '/../../templates/add_product.php';
    }
    
    public function store() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $validator = new Validator($_POST);
            $errors = $validator->validate();
            
            if (empty($errors)) {
                $type = $_POST['productType'];
                $sku = $_POST['sku'];
                $name = $_POST['name'];
                $price = $_POST['price'];
                
                switch ($type) {
                    case 'DVD':
                        $product = new DVD($sku, $name, $price, $_POST['size']);
                        break;
                    case 'Book':
                        $product = new Book($sku, $name, $price, $_POST['weight']);
                        break;
                    case 'Furniture':
                        $product = new Furniture(
                            $sku, 
                            $name, 
                            $price, 
                            $_POST['height'], 
                            $_POST['width'], 
                            $_POST['length']
                        );
                        break;
                }
                
                if ($product->save()) {
                    header("Location: /");
                    exit();
                }
            }
            
            // If validation fails or save fails, show form with errors
            $productTypes = \App\Model\Product\Product::getProductTypes();
            require __DIR__ . '/../../templates/add_product.php';
        }
    }
}