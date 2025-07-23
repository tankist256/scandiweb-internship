# PHP Setup
### Installing PHP and Configuring with Nginx

PHP serves three main purposes:  
1. Handling requests from the server  
2. Validating and processing those requests  
3. Compiling responses to send back to the client  
---
#### Installation Steps  
- Install PHP via the native package manager.  
- Required components:  
  - **PHP CLI** (Command Line Interface)  
  - **PHP-FPM** (FastCGI Process Manager) for handling requests from Nginx.  

Example installation (Ubuntu):  
```bash
sudo apt install php8.1 php8.1-fpm
```

Verify installation:  
```bash
php --version
systemctl status php8.1-fpm
```
---
#### Configuring Nginx with PHP  
1. Edit the Nginx default configuration (`/etc/nginx/sites-enabled/default`).  
2. Uncomment and modify the PHP block to pass requests to PHP-FPM:  
   ```nginx
   location ~ \.php$ {
       include snippets/fastcgi-php.conf;
       fastcgi_pass unix:/run/php/php8.1-fpm.sock;
   }
   ```
3. Add `index.php` to the `index` directive:  
   ```nginx
   index index.php index.html;
   ```
4. Reload Nginx:  
   ```bash
   sudo systemctl reload nginx
   ```
___
#### Testing PHP  
1. Rename `index.html` to `index.php`.  
2. Add PHP code to test:  
   ```php
   <p>Current PHP version: <?php echo phpversion(); ?></p>
   ```
3. Access the page in a browser to confirm PHP is working.  

#### Enabling PHP Error Display  
By default, PHP errors are hidden. To enable them for development:  
1. Edit the PHP-FPM config:  
   ```bash
   sudo nano /etc/php/8.1/fpm/php.ini
   ```
2. Uncomment or add:  
```ini   
display_errors = On
```
3.Restart PHP-FPM:  
   ```bash
   sudo systemctl restart php8.1-fpm
   ```  
[[database setup]]
