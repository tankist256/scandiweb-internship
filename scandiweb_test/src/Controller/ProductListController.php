<?php
namespace App\Controller;

use App\Model\Product\DVD;
use App\Model\Product\Book;
use App\Model\Product\Furniture;

class ProductListController {
    public function index() {
        $dvdProducts = DVD::getAll();
        $bookProducts = Book::getAll();
        $furnitureProducts = Furniture::getAll();
        
        $products = array_merge($dvdProducts, $bookProducts, $furnitureProducts);
        
        require __DIR__ . '/../../templates/product_list.php';
    }
    
    public function delete() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete'])) {
            if (!empty($_POST['selected_products'])) {
                $ids = $_POST['selected_products'];
                \App\Model\Product\Product::delete($ids);
            }
            header("Location: /");
            exit();
        }
    }
}