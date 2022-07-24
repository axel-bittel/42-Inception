#!/bin/sh

sed -i "s/listen = \/run\/php\/php7.3-fpm.sock/listen = 9000/" "/etc/php/7.3/fpm/pool.d/www.conf";
chown -R www-data:www-data /var/www/*;
chown -R 755 /var/www/*;
mkdir -p /run/php/;
touch /run/php/php7.3-fpm.pid;

if [ ! -e /var/www/html/wp-config.php ]; then
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
	echo "begin install" &&\
	wp core install --allow-root --url=${URL} --title=${Inception} --admin_user=${USERNAME_ADMIN} --admin_password=${PASS_ADMIN} --admin_email=${EMAIL_ADMIN}
	echo "end install" &&\
	wp user create --allow-root ${USERNAME_MOI} ${EMAIL_MOI} --user_pass=${PASS_MOI} &&\
	echo "END WORDPRESS CONFIG"
fi
exec "$@"
