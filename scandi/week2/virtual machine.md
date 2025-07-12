# *Creating a virtual Machine with vagrant*
---
## Vagrant
---
## What Is Vagrant All About?

In simple terms, **Vagrant** is a tool that helps automate the setup of virtual machines. Instead of manually creating a Virtual Machine — clicking "New," typing a name, selecting an ISO file, and tweaking hardware settings — Vagrant allows you to **define all of this configuration in code**.

---

### Why Use Vagrant?

When you're working in a team, it's crucial that **everyone has the same development environment**. Vagrant allows you to:
- Define the VM configuration in a single file (`Vagrantfile`)
- Share this configuration with the entire team
- Ensure that everyone is working in **identical environments**
- Avoid the infamous "it works on my machine" problem
---

### Consistency Across Environments

With Vagrant:
- Local environments match the server environment
- New team members can set up the project with a single command
- Configuration becomes **reproducible and portable**
---
### Summary

```
Vagrant simplifies the process of managing virtual machines by encapsulating configuration in code, ensuring that all developers work in a consistent and predictable environment.
```
---

# *How to set up vagrant*

---

### Getting Started with Vagrant

The quickest way to start is by selecting a [**predefined box**](https://portal.cloud.hashicorp.com/vagrant/discover) environment from the **Vagrant Cloud**.  
Click the link to browse a large list of prepackaged boxes. You'll see details like:

- Versions
- Download counts
- Supported providers (e.g. VirtualBox, VMware, libvirt, Parallels, etc.)

I am using **Virtualbox** abbreviated as VM

---

### Creating a Virtual Machine with Vagrant

To create a VM using a Vagrant box:
1. Navigate to your project folder in the terminal
2. Run:

```bash
vagrant init
```

This command generates a `Vagrantfile` in your directory.  
It sets up your project to use Vagrant.

---

### Editing the Vagrantfile

Open the `Vagrantfile` in a text editor. You'll notice most lines are commented out.

One important active line is:

```ruby
config.vm.box = "..."
```

This line defines which box your VM will use.

---

#### _Finding the Right Box_

You can search for boxes at:  
 [https://vagrantcloud.com](https://vagrantcloud.com)

For my project, I will use an **Ubuntu based box**. Why?

1. Most cloud platforms (AWS, DigitalOcean, etc.) use Ubuntu
2. It's one of the most popular and stable Linux distributions
3. You'll encounter it frequently in real-world projects
---

### Picking the Right Ubuntu Version

Boxes are often named after Ubuntu **code names** (like `trusty`, `focal`, `jammy`).

**Important:** These names don't indicate quality or features  they correspond to specific Ubuntu versions with defined **support lifespans**.

Before choosing a version:
- Visit the [Ubuntu Release & End of Life Dates page](https://wiki.ubuntu.com/Releases)
- Check that your version is still supported

**For example:**  
The `trusty` release reached end-of-life in 2016  using it could lead to issues with:
1. Package updates
2. Compatibility
3. Security

---

### Recommended: Ubuntu Jammy Jellyfish

 i would use the latest LTS version:

```
ubuntu/jammy64
```
Search for it on Vagrant Cloud, verify the latest version, and check the maintainer.

---

### Final Step(boss): Build the Virtual Machine

Once your `Vagrantfile` is set up, run:

```bash
vagrant up
```

This will build and boot the virtual machine using the selected box.

---

