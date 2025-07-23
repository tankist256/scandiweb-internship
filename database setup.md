# Setting Up MySQL and PHP PDO for Database Integration

## Installing MySQL
- Use the native package manager to install MySQL client and server:
  ```bash
  sudo apt install -y mysql-client mysql-server
  ```

- Verify installation by checking the MySQL version:
  ```bash
  mysql --version
  ```

- MySQL runs on port `3306` by default. Confirm it's active:
  ```bash
  ss -tulnp | grep 3306
  ```

## Configuring MySQL
1. Log in as the superuser:
   ```bash
   sudo mysql
   ```

2. Create a test database:
   ```sql
   CREATE DATABASE test;
   ```

3. Allow remote connections:
   - Edit the MySQL config file:
     ```bash
     sudo nano /etc/mysql/mysql.conf.d/mysqld.cnf
     ```
   - Change the bind address to `0.0.0.0` (for development only)
   - Restart MySQL:
     ```bash
     sudo systemctl restart mysql
     ```

4. Create a user with remote access privileges:
   ```sql
   CREATE USER 'root'@'%' IDENTIFIED BY 'root';
   GRANT ALL PRIVILEGES ON *.* TO 'root'@'%';
   FLUSH PRIVILEGES;
   ```

## Connecting via IDE (PHPStorm/VSCode)
- Use these connection details:
  - Host: Your VM's IP address
  - Port: 3306
  - User: root
  - Password: root
  - Database: test

## Creating a Sample Table
```sql
CREATE TABLE products (
  id INT AUTO_INCREMENT PRIMARY KEY,
  sku VARCHAR(10) UNIQUE NOT NULL,
  name VARCHAR(255) NOT NULL,
  price DECIMAL(10,2) NOT NULL
);
```

## Setting Up PHP PDO
1. Install the MySQL PDO extension:
   ```bash
   sudo apt install php8.1-mysql
   ```

2. Basic PDO connection in PHP:
   ```php
   try {
     $pdo = new PDO('mysql:host=192.168.33.10;dbname=test', 'root', 'root');
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     
     $products = $pdo->query('SELECT * FROM products')->fetchAll(PDO::FETCH_ASSOC);
     echo json_encode($products);
   } catch(PDOException $e) {
     echo "Connection failed: " . $e->getMessage();
   }
   ```

## Key Resources
- [MySQL Documentation](https://dev.mysql.com/doc/)
- [PHP PDO Documentation](https://www.php.net/manual/en/book.pdo.php)
- [W3Schools MySQL Tutorial](https://www.w3schools.com/mysql/)