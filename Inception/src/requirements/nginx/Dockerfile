FROM debian:latest
RUN apt-get update && \
	apt-get install -y nginx openssl
COPY ./tools/default /etc/nginx/conf.d/default.conf
EXPOSE 443
COPY ./tools/index.html /var/www/html/index.html
COPY ./tools/nginx.sh /tmp/nginx.sh
RUN mkdir /etc/nginx/ssl && chmod 777 /tmp/nginx.sh
#RUN openssl req -newkey rsa:4096 -x509 -sha256 -days 365 -nodes \
#-keyout /etc/ssl/private/nginx.key \
#-out /etc/ssl/certs/nginx.crt \
#-subj "/C=FR/ST=Nice/L=Nice/O=Inception/CN=abittel.42.fr/"
ENTRYPOINT ["/tmp/nginx.sh"]
CMD ["nginx", "-g", "daemon off;"]
