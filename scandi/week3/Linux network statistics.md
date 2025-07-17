# Linux Network Statistics  
*Monitoring ports, connections, and services with `ss` and `netstat`.*

## Core Commands  
### `ss` (Socket Statistics)  
```bash
sudo ss -tulnp  # Show all listening ports with processes
```
- **Flags**:  
  - `-t`: TCP connections  
  - `-u`: UDP connections  
  - `-l`: Listening ports only  
  - `-n`: Numeric addresses (no DNS resolution)  
  - `-p`: Show process info  

### `netstat` (Legacy Tool)  
```bash
sudo netstat -tulnp  # Similar output to `ss` (may require installation)
```

---

## Key Use Cases  
1. **Check Port Availability**:  
   ```bash
   sudo ss -tln | grep ':80'  # Verify if port 80 (HTTP) is in use
   ```
2. **Identify Services**:  
   ```bash
   sudo ss -tulnp | grep 'nginx'  # Find Nginx processes and ports
   ```
3. **Install `netstat` (if missing)**:  
   ```bash
   sudo apt update && sudo apt install net-tools
   ```

---

## Example Output Breakdown  
```plaintext
Netid  State   Recv-Q  Send-Q  Local Address:Port  Peer Address:Port  
tcp    LISTEN  0       128     *:2020              *:*               users:(("sshd",pid=123,fd=3))
```
- **`*:2020`**: Port 2020 is listening on all interfaces (SSH in this case).  
- **`sshd`**: Process using the port (with PID 123).  

---
### Tips
- **Common Ports**:  
  - `22`: SSH  
  - `80`: HTTP  
  - `3306`: MySQL  
- **Troubleshooting**:  
  - Use `journalctl -u <service>` if a service fails to bind to a port.  
  - Check firewall rules with `sudo ufw status` (if UFW is enabled).  
[[linux process management]], [[linux package management]]
