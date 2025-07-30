<?php
namespace App\Database;

class Database {
    private static $instance = null;
    private $connection;
    
    private function __construct() {
        $host = 'localhost';
        $dbname = 'scandiweb_test';
        $username = 'root';
        $password = 'root';
        
        try {
            $this->connection = new \PDO(
                "mysql:host=192.168.56.0;dbname=scandiweb_test", 
                'root', 
                'root'
            );
            $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }
    
    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new Database();
        }
        return self::$instance->connection;
    }
}