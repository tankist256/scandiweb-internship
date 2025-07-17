# Linux Package Management  

## Core Concepts  
1. **Package Managers**:  
   - Each Linux distro has its own (e.g., `apt` for Ubuntu/Debian, `apk` for Alpine).  
   - Manage software from **official repositories** (vs. manual downloads).  

2. **Key Terms**:  
   - **Repository**: Remote server hosting package lists/versions.  
   - **Sandboxed (Snap)**: Isolated packages (e.g., Snapcraft).  

---

## APT Workflow (Ubuntu/Debian)  
### 1. Update Package Lists  
```bash
sudo apt update   # Fetches latest package lists (does NOT upgrade)
```

### 2. Search for Packages  
```bash
sudo apt search <query>   # e.g., `sudo apt search ncdu`
```

### 3. Install a Package  
```bash
sudo apt install <package>   # e.g., `sudo apt install ncdu`
```

### 4. Verify Installation  
```bash
<package> --version   # Check if installed (e.g., `ncdu --version`)
```

### 5. Upgrade System  
```bash
sudo apt upgrade      # Updates all installed packages
sudo apt full-upgrade # Handles dependencies (more aggressive)
```

---

## Example: Installing `ncdu`  
1. **Update Lists**:  
   ```bash
   sudo apt update
   ```
2. **Search**:  
   ```bash
   sudo apt search ncdu  # Finds "ncdu" (disk usage analyzer)
   ```
3. **Install**:  
   ```bash
   sudo apt install ncdu
   ```
4. **Use**:  
   ```bash
   ncdu /   # Scan root directory; navigate with arrow keys
   ```
   - **`Q`**: Quit interface.  

---

## Alternative: Snap Packages  
- **Use Case**: Desktop apps (e.g., PHPStorm, OBS Studio).  
- **Commands**:  
  ```bash
  sudo snap install <package>   # Install
  snap list                     # View installed snaps
  ```
---
## Key Notes  
- **Always** run `sudo apt update` before installing.  
- Prefer `apt` for servers, `snap` for desktop apps.  
- **Other Distros**:  
  - Alpine: `apk add <package>`  
  - Fedora: `dnf install <package>`  
  [[Linux permision]], [[CLI Basics]] 