# Linux Privileges & Ownership  

## Key Commands for User/Group Info  
1. **Current User**:  
   ```bash
   whoami          # "vagrant" (current user)
   sudo whoami     # "root" (verify sudo access)
   ```
2. **Group Membership**:  
   ```bash
   groups          # List groups the user belongs to (e.g., "vagrant")
   id vagrant      # Detailed user/group IDs (UID, GID)
   ```
3. **Logged-in Users**:  
   ```bash
   who             # List active sessions
   ```

---

## File Permissions Breakdown  
### Permission String (`ls -l` Output):  
```
drwxr-xr-x 2 vagrant devteam 4096 Apr 23 10:00 project/
```
- **`d`**: Type (`d`=directory, `-`=file, `l`=symlink).  
- **Triplets**: `rwx` for:  
  - **User (owner)**: `rwx` (read/write/execute).  
  - **Group**: `r-x` (read/execute).  
  - **Others**: `r-x` (read/execute).  

### Modify Permissions (`chmod`):  
- **Symbolic Mode** (recommended):  
  ```bash
  chmod u+rwx,g+rx,o-rwx project/  # Add/remove perms for user/group/others
  ```
- **Octal Mode**:  
  ```bash
  chmod 750 project/  # 7=user(rwx), 5=group(r-x), 0=others(---)
  ```

---

## Ownership & Groups  
### Change Owner (`chown`):  
```bash
sudo chown root:root project/  # Only root can change ownership
sudo chown vagrant:devteam project/  # Reassign to user/group
```

### Manage Groups:  
```bash
sudo groupadd devteam          # Create new group
sudo usermod -aG devteam vagrant  # Add user to group
groups vagrant                 # Verify (requires re-login)
```

---

## Critical Concepts  
1. **Root Privileges**:  
   - Use `sudo` to bypass restrictions (e.g., `sudo chmod`, `sudo chown`).  
   - **Always** double-check paths when running `sudo` commands.  

2. **Permission Denied?**  
   - Check ownership (`ls -l`).  
   - Verify group membership (`groups`).  
   - Use `sudo` if needed (temporarily).  

3. **User/Group Files**:  
   - `/etc/passwd`: User accounts (UID, home dir, shell).  
   - `/etc/group`: Group definitions (GID, members).  

---

## Practical Example  
### Scenario: Restrict a Folder to Dev Team  
1. Create group and assign user:  
   ```bash
   sudo groupadd devteam
   sudo usermod -aG devteam vagrant
   ```
2. Set ownership/permissions:  
   ```bash
   sudo chown vagrant:devteam project/
   chmod 770 project/          # rwx for owner+group, nothing for others
   ```
3. **Relogin** for group changes to apply.  
