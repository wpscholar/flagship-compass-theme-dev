#!/bin/sh

# Install required Ruby gems
sudo gem install scss-lint

# Install required global Node.js packages
echo "Installing required global Node.js packages"
npm install -g bower
npm install -g csscomb
npm install -g cssjanus
npm install -g grunt-cli
npm install -g jscs
npm install -g jshint

# Create database
echo "Creating database 'themedev' (if it's not already there)"
mysql -u root --password=root -e "CREATE DATABASE IF NOT EXISTS themedev"
mysql -u root --password=root -e "GRANT ALL PRIVILEGES ON themedev.* TO wp_all@localhost IDENTIFIED BY 'vagrant';"

# Drop all tables from database
wp db reset --yes --path=www/cms

# Import database from /sql/import.sql
wp db import sql/import.sql --path=www/cms

# Run composer
echo "Running 'composer install'"
composer install -d /vagrant/www/flagship-compass-theme-dev