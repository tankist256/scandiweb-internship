<?php
namespace App\Validation;

class Validator {
    private $data;
    private $errors = [];
    
    public function __construct($data) {
        $this->data = $data;
    }
    
    public function validate() {
        $this->validateRequired('sku', 'SKU is required');
        $this->validateRequired('name', 'Name is required');
        $this->validatePrice('price', 'Price must be a valid number greater than 0');
        
        if (!isset($this->data['productType']) || !in_array($this->data['productType'], ['DVD', 'Book', 'Furniture'])) {
            $this->errors['productType'] = 'Please select a valid product type';
        } else {
            switch ($this->data['productType']) {
                case 'DVD':
                    $this->validateSize('size', 'Size must be a valid number greater than 0');
                    break;
                case 'Book':
                    $this->validateWeight('weight', 'Weight must be a valid number greater than 0');
                    break;
                case 'Furniture':
                    $this->validateDimension('height', 'Height must be a valid number greater than 0');
                    $this->validateDimension('width', 'Width must be a valid number greater than 0');
                    $this->validateDimension('length', 'Length must be a valid number greater than 0');
                    break;
            }
        }
        
        return $this->errors;
    }
    
    private function validateRequired($field, $message) {
        if (empty($this->data[$field])) {
            $this->errors[$field] = $message;
        }
    }
    
    private function validatePrice($field, $message) {
        if (!isset($this->data[$field]) || !is_numeric($this->data[$field]) || $this->data[$field] <= 0) {
            $this->errors[$field] = $message;
        }
    }
    
    private function validateSize($field, $message) {
        if (!isset($this->data[$field]) || !is_numeric($this->data[$field]) || $this->data[$field] <= 0) {
            $this->errors[$field] = $message;
        }
    }
    
    private function validateWeight($field, $message) {
        if (!isset($this->data[$field]) || !is_numeric($this->data[$field]) || $this->data[$field] <= 0) {
            $this->errors[$field] = $message;
        }
    }
    
    private function validateDimension($field, $message) {
        if (!isset($this->data[$field]) || !is_numeric($this->data[$field]) || $this->data[$field] <= 0) {
            $this->errors[$field] = $message;
        }
    }
}