# Linux Process Management  
*Monitoring and controlling services with `systemctl` and `journalctl`.*

## Core Commands  
### `systemctl` (Service Control)  
```bash
systemctl status                 # List all services
systemctl status <service>       # Check specific service (e.g., `cron`)
sudo systemctl start <service>   # Start a service
sudo systemctl stop <service>    # Stop a service
sudo systemctl restart <service> # Restart a service
```

### `journalctl` (Logs)  
```bash
sudo journalctl -u <service>     # View logs for a service
sudo journalctl --since "20 min ago"  # Filter logs by time
sudo journalctl -f               # Follow live logs (like `tail -f`)
```

---

## Key Workflow Example: Cron Service  
1. **Check Status**:  
   ```bash
   systemctl status cron
   ```
   - Shows:  
     - Active/inactive state  
     - Memory/CPU usage  
     - Recent log snippets  

2. **Stop/Start**:  
   ```bash
   sudo systemctl stop cron    # Stop the service
   sudo systemctl start cron   # Restart it
   ```

3. **Investigate Logs**:  
   ```bash
   sudo journalctl -u cron --since "1 hour ago"
   ```
   - Reveals timestamps, errors, and service transitions.

---

### Tips  
- **Log Locations**:  
  - `/var/log/` contains raw log files (e.g., `syslog`, `auth.log`).  
  - Use `grep`/`cat` to inspect them directly.  
- **Zombie Processes**:  
  - Check with `top` or `ps aux | grep defunct`.  
  - Kill with `sudo kill -9 <PID>`.  
- **Help Pages**:  
  ```bash
  man systemctl
  man journalctl
  ```
[[linux package management]], [[Linux permision]]