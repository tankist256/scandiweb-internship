# Git Basics And Navigation In CLI
---
> [!summary] 
> A **distributed version control system** to track code changes, collaborate via `GitHub` or `GitLab`, and manage project history.

## Core Concepts

1. **Repository (`repo`)**: Project folder tracked by Git.
2. **Commit**: Snapshot of changes at a point in time.
3. **Branch**: Independent line of development (default: `main`/`master`).
4. **Remote**: Cloud-hosted repo (e.g., `origin`).

---

## Setup & Config
### Initialize a Repo

```bash
git init //Start tracking current directory
git clone <repo-url> //Download existing repo
```

### Configure User

```bash
git config --global user.name "Your Name"
git config --global user.email "email@example.com"
```

### View Config

```bash
git config --list
```


---
## Basic Workflow
| Command               | Description                  |
| --------------------- | ---------------------------- |
| `git status`          | Show changed/untracked files |
| `git add <file>`      | Stage changes for commit     |
| `git add .`           | Stage **all** changes        |
| `git commit -m "msg"` | Commit staged changes        |
| `git log`             | Show commit history          |
| `git diff`            | Show unstaged changes        |
### Example Workflow

```bash
 git add file.c //Necesary for commit
 git commit -m "Add c program for Juris"
 ```

---

## Branching & Merging
| Command               | Description                      |
| --------------------- | -------------------------------- |
| `git branch`          | List branches (`*` = current)    |
| `git branch <name>`   | Create new branch                |
| `git checkout <name>` | Switch to branch                 |
| `git merge <branch>`  | Merge branch into current        |
| `git rebase <branch>` | Reapply commits on top of branch |

### Conflicts
 Resolve merge conflicts manually in files, then:
```bash
git add <file> //Pre commit task
git commit //Stage your changes 
```

---

## Remote Repos
| Command                | Description                  |
| ---------------------- | ---------------------------- |
| `git remote -v`        | List linked remotes          |
| `git push origin main` | Upload commits to remote     |
| `git pull origin main` | Download changes from remote |
| `git fetch`            | Download changes (no merge)  |

### Upstream Shortcut
```bash
git push -u origin main //Set default remote branch
```

---

## Undoing Changes
| Command               | Description                                         |
| --------------------- | --------------------------------------------------- |
| `git restore <file>`  | Discard unstaged changes                            |
| `git reset <commit>`  | Move branch pointer back (--hard to delete changes) |
| `git revert <commit>` | Create new commit undoing changes                   |

> [!danger] `git reset --hard`
>  <h3>Permanently deletes uncommitted changes!</h3>

---

## Advanced
### Stashing
```bash
git stash //Save unfinished work
git stash pop //Restore stashed changes
```

### Tagging Releases
```bash
git tag v1.0 //Create tag
git push --tags //Share tags
```

### Submodules
```bash
git submodule add <repo-url> //Nest another repo
```
