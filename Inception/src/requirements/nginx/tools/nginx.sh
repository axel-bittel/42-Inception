#!/bin/sh

openssl req -newkey rsa:4096 -x509 -sha256 -days 365 -nodes \
-keyout /etc/ssl/private/nginx.key \
-out /etc/ssl/certs/nginx.crt \
-subj "/C=FR/ST=Nice/L=Nice/O=Inception/CN=abittel.42.fr/"

exec "$@"

