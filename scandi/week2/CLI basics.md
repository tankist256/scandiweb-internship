# Linux Command Line Interface (CLI) Introduction

## Overview
- [[cli]]
- Ubuntu's official documentation ([Ubuntu.com](https://ubuntu.com)) provides detailed explanations

---

## [[Virtual Machine]] Management with Vagrant
- **Start VM**: `vagrant up`
- **Stop VM**: `vagrant halt`
- **SSH into VM**: `vagrant ssh`
- **Windows Users**: Use Git Bash or PowerShell for same commands

---

## Command Structure
### Components:
1. **Command**: Primary executable (e.g., `apt`, `ls`)
2. **Subcommands**: Actions tied to the command (e.g., `apt search`)
3. **Flags**: Options modifying behavior (e.g., `--names-only` for `apt search`)
   - **Short flags**: Single hyphen (`-h`)
   - **Long flags**: Double hyphen (`--help`)

### Example:
```bash
apt search php --names-only
```

---

## Help and Manual Pages
- **Help Flag**: Most commands support `--help` or `-h`
  ```bash
  ls --help
  apt -h
  ```
- **Manual Pages**: Detailed documentation via `man`
  ```bash
  man ls
  man apt
  ```

---

## File System Navigation
- **List Directory Contents**: `ls`  
  - Common flags: `-l` (long format), `-a` (show hidden files), `-h` (human-readable sizes)
- **Change Directory**: `cd /path/to/directory`
- **Print Working Directory**: `pwd`

<h2> Fun </h2>In one day my teacher asks where i work amd i answer wrom laptop

---
## Locating Commands and Files
- **Binaries Directory**: `/bin` contains core executables (e.g., `ls`, `apt`)
- **Find Command Paths**:
  - `whereis <command>`: Locates binary, configs, and manuals
    ```bash
    whereis ls
    ```
  - `which <command>`: Shows binary path.
    ```bash
    which apt
    ```
- **Search Files**:
  ```bash
  find /home/vagrant -name "authorized_keys"
  ```

---

## File and Directory Operations
### File Creation/Editing:
- **Create File**: `touch filename.txt`
- **Edit File**: `nano filename.txt`
- **View File**: `cat filename.txt`

### Directory Management:
- **Create Directory**: `mkdir my_folder`
- **Move Files**: `mv file.txt /path/to/destination`
- **Copy Files**: `cp file.txt backup_file.txt`
- **Delete**:
  - **File**: `rm file.txt` (permanent!)
  - **Directory**: `rm -r my_folder` (recursive flag required)

---

## Piping and Filtering Output
- **Pipe (`|`)**: Redirects output to another command
- **Grep**: Filters lines matching a pattern
  ```bash
  cat /var/log/syslog | grep "Apr 23"
  ```
- **Search Command Output**:
  ```bash
  apt search php | grep "8.1"
  ```

---

## Key Takeaways
1. **Commands are Modular**: Each is a separate binary in `/bin` or `/usr/bin`
2. **Documentation**: Use `--help` or `man` for command details
3. **File Operations**: Caution with `rm`—no recycle bin!
4. **Piping/Grep**: Essential for parsing logs or large outputs
