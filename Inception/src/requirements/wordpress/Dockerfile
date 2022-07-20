FROM debian:buster
RUN 	apt-get update &&\
	apt-get install -y php-fpm &&\
	apt-get install -y php7.3 php-mysqli sendmail &&\
	apt-get install -y wget
COPY ./conf/www.conf /etc/php/7.3/fpm/pool.d
COPY ./tools/config.sh /var/www/config.sh
COPY ./tools/wp-config.php /var/www/wp-config.php
RUN chmod +x /var/www/config.sh
RUN chmod +x /var/www/wp-config.php
EXPOSE 9000
ENTRYPOINT ["/var/www/config.sh"]
CMD ["/usr/sbin/php-fpm7.3", "--nodaemonize"]
