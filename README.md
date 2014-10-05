# Project Documentation

## WordPress Login Credentials
- Username: admin
- Password: vagrant

## Using Vagrant

### Prerequisites
- Install [VirtualBox](https://www.virtualbox.org/wiki/Downloads)
- Install [Vagrant](http://www.vagrantup.com/downloads.html)
- Install the [vagrant-hostsupdater](https://github.com/cogitatio/vagrant-hostsupdater) plugin with `vagrant plugin install vagrant-hostsupdater`
- Install the [vagrant-triggers](https://github.com/emyl/vagrant-triggers) plugin with `vagrant plugin install vagrant-triggers`
- Clone the  [Varying Vagrant Vagrants](https://github.com/Varying-Vagrant-Vagrants/VVV) repository
- Clone the [Flagship Compass Theme Dev](#) repository into the www directory in VVV

### Getting Started
- In the terminal, run `vagrant up` from the VVV root
- Run `vagrant ssh` to access the command line for the VVV virtual machine
- Run `cd /vagrant/www/flagship-compass-theme-dev/www/content/themes/compass` to navigate to the Compass theme directory
- Run `npm install`
- Visit [http://theme.dev/](http://theme.dev/) in your browser

## Everyday Usage
- Running a virtual machine does utilize resources on the host machine, which means you will want to 'turn off' the virtual machine when not in use.  You can use the `vagrant suspend` or `vagrant halt` commands for this purpose.
- Turning the virtual machine back on can be done using the same `vagrant up` command you used to create the virtual machine initially. Since the machine already exists in this case, the provisioning step will be skipped.
- Should you ever need to reprovision the virtual machine, you can just run `vagrant provision`.
- Very rarely you may find you need to trash a virtual machine and start fresh.  Just run `vagrant destroy` to trash the virtual machine and then follow the steps in the 'Getting Started' section to create a new instance.

### Accessing the Virtual Machine via Command Line
- Open your terminal and type `vagrant ssh`

### Accessing MySQL Command Line
- After you ssh into the virtual machine, run `mysql -u root -p`
- Type the password `vagrant` when prompted.

### Exporting the MySQL Database
- After you ssh into the virtual machine run `wp db export ../sql/backup.sql` from the project's WordPress directory
- Your `backup.sql` file will now be inside the project `/sql/` directory on your local machine.
- As a best practice, please use this naming convention for backups: backup-[year][month][day].sql (i.e. backup-20140501.sql).
- The file named import.sql will be imported automatically during provisioning. Updating this file and pushing the changes to the repo will allow other devs to pull down your changes by importing the database.

### Importing a MySQL Database
- After you ssh into the virtual machine run `wp db import ../sql/import.sql` from the project's WordPress directory