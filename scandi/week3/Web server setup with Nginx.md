# Web Server Setup with Nginx  
*Configuring Nginx for local development using Vagrant.*

## Key Steps  
### 1. Install Nginx  
```bash
sudo apt update
sudo apt install nginx
```

### 2. Verify Installation  
```bash
nginx -v                  # Check version
systemctl status nginx    # Verify service is running
```

### 3. Configure Network (Vagrantfile in your working directory)  
```ruby
config.vm.network "private_network", ip: "192.168.56.10"  # Adjust IP as needed
```

### 4. Basic Nginx Configuration  
- **Default Config**: `/etc/nginx/sites-available/default`  
- **Key Directives**:  
  ```nginx
  server {
      listen 80;
      root /vagrant/public;   # Project files mounted here
      index index.html;
  }
  ```

### 5. Secure Project Structure  
```
/vagrant
├── Vagrantfile
├── nginx-config/          # Store custom configs
└── public/                # Web-accessible files (HTML/CSS/JS)
```

### 6. Automate Provisioning (Vagrantfile in your working directory)  
```ruby
config.vm.provision "shell", inline: <<-SHELL
    sudo apt update
    sudo apt install -y nginx
    sudo cp /vagrant/nginx-config/default /etc/nginx/sites-available/
    sudo systemctl reload nginx
SHELL
```

---

## Critical Commands  
- **Test Nginx**:  
  ```bash
  curl http://localhost  # From VM
  # Or access via browser: http://192.168.56.10
  ```
- **Reload Nginx After Config Changes**:  
  ```bash
  sudo nginx -t         # Test config syntax
  sudo systemctl reload nginx
  ```

---

## Security Best Practices  
1. **Restrict Access**:  
   - Ensure `root` points only to `/public` folder.  
   - Disable directory listing in Nginx config:  
     ```nginx
     autoindex off;
     ```
2. **File Permissions**:  
   ```bash
   chmod 750 /vagrant      # Restrict non-web files
   chown -R vagrant:www-data /vagrant/public
   ```

---

## Troubleshooting  
- **Port Conflicts**:  
  ```bash
  sudo ss -tulnp | grep ':80'  # Check if port 80 is free
  ```
- **Permission Issues**:  
  ```bash
  sudo tail -f /var/log/nginx/error.log  # View live errors
  ```

[[PHP Setup]], [[Virtual Machine]], [[Linux network statistics]]  

