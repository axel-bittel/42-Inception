FROM debian:buster
RUN 	apt-get update &&\
	apt-get install -y php-fpm &&\
	apt-get install -y php-cli php-mysql php-curl php-gd php-intl &&\
	apt-get install -y wget
COPY ./conf/www.conf /etc/php/7.3/fpm/pool.d
COPY ./tools /tmp
RUN chmod +x /tmp/config.sh
EXPOSE 9000
ENTRYPOINT [ "/tmp/config.sh" ]
CMD ["/usr/sbin/php-fpm7.3"]