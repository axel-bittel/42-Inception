FROM debian:latest
RUN apt-get update && \
	apt-get install -y nginx openssl
COPY ./tools/default /etc/nginx/conf.d/default.conf
EXPOSE 443
COPY ./tools/index.html /var/www/html/index.html
RUN mkdir /etc/nginx/ssl
RUN openssl req -newkey rsa:4096 -x509 -sha256 -days 365 -nodes \
        -out /etc/nginx/ssl/nginx.pem \
        -keyout /etc/nginx/ssl/nginx.key \
        -subj "/C=FR/ST=Nice/L=Nice/O=Inception/CN=abittel.42.fr/"
CMD ["nginx", "-g", "daemon off;"]