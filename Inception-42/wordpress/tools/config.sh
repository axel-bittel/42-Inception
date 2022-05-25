#!/bin/sh
mkdir -p /var/www/html && \
cd /var/www/html && \
wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar && \
chmod +x wp-cli.phar && \
mv wp-cli.phar /usr/local/bin/wp && \
wp core download --allow-root && \
mv /tmp/wp-config.php . && \
cat wp-config.php && \
echo "CAT" && \
wp core install --allow-root --url="abittel.42.fr" --title="Inception" --admin_user="ROOT" --admin_password="ROOT42" --admin_email="ROOT@42.fr" 
