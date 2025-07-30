<?php
require __DIR__ . '/../vendor/autoload.php';

use App\Controller\ProductListController;
use App\Controller\AddProductController;

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

$request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($request) {
    case '/':
        (new ProductListController())->index();
        break;
        
    case '/delete':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            (new ProductListController())->delete();
        }
        break;
        
    case '/add-product':
        $controller = new AddProductController();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $controller->store();
        } else {
            $controller->index();
        }
        break;
        
    default:
        http_response_code(404);
        echo '404 Not Found';
        break;
}