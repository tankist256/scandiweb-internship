# Navigation In CLI (Command Line Interface) 
________________________________________________________________________
## Core Concepts
- **Shell**: Interpreter for commands (e.g., `bash`, `zsh`, `fish`).
- **Terminal**: Application that runs the shell.
- **Prompt**: Where you type commands (`user@host:~$`).

## Basic Commands
### Navigation
| Command       | Description            |
| ------------- | ---------------------- |
| `pwd`         | Show current directory |
| `ls`          | List files             |
| `cd <dir>`    | Change directory       |
| `mkdir <dir>` | Create a directory     |
| `rmdir <dir>` | Remove empty directory |
### Examples

```bash
> cd ~/Documents      # Go to Documents
> ls -la              # Show hidden files
> ```

### File Operations
| Description        | Command          |
| ------------------ | ---------------- |
| Create a file      | `touch file.txt` |
| Print file content | `cat file.txt`   |
| Copy a file        | `cp file1 file2` |
| Move/rename a file | `mv file1 file2` |
| Delete a file      | `rm file.txt`    |

> [!warning] 
> `rm -rf /` is **very fckn dangerous**! <h1>Deletes everything on drive recursively.</h1>

---

### Advanced Usage
#### Pipes & Redirection
```bash
ls -l | grep ".md"      # Filter markdown files
echo "Hello" > log.txt  # Overwrite file
echo "World" >> log.txt # Append to file
```

### Permissions
```bash
chmod 755 script.sh
```


### System Monitoring
```bash
top                  # Live processes
df -h                # Disk space
free -h              # Memory usage
```
