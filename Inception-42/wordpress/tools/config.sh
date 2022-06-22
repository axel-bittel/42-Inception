#!/bin/sh

sed -i "s/listen = \/run\/php\/php7.3-fpm.sock/listen = 9000/" "/etc/php/7.3/fpm/pool.d/www.conf";
chown -R www-data:www-data /var/www/*;
chown -R 755 /var/www/*;
mkdir -p /run/php/;
touch /run/php/php7.3-fpm.pid;

if [ ! -f /var/www/html/wp-config.php ]; then
	echo "BEGIN WORDPRESS CONFIG" &&\
	mkdir -p /var/www/html && \
	cd /var/www/html && \
	mv ../wp-config.php . && \
	mkdir -p /var/www/html && \
	echo "BEGIN DOWNLOAD" &&\
	wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar && \
	echo "END DOWNLOAD" &&\
	chmod +x wp-cli.phar && \
	mv wp-cli.phar /usr/local/bin/wp && \
	cd /var/www/html && \
	wp core download --allow-root && \
	echo "ERROR HERE" &&\
	cat wp-config.php && \
	echo "CAT" && \
	wp core install --allow-root --url="abittel.42.fr" --title="Inception" --admin_user="ROOT" --admin_password="ROOT42" --admin_email="ROOT@42.fr" 
	wp user create --allow-root user_wp user_wp@42.fr --user_pass="WordPress42" &&\
	echo "END WORDPRESS CONFIG"
fi
exec "$@"
