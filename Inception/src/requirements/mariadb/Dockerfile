FROM debian:buster
RUN apt-get update && apt-get install -y mariadb-server mariadb-client

EXPOSE 3306

COPY ./conf/50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf
COPY ./tools/configure.sql /tmp/configure.sql
COPY ./tools/db.sql /tmp/db.sql
COPY ./tools/config.sh /tmp/config.sh

RUN service mysql start && mysql < /tmp/configure.sql

CMD ["mysqld", "--datadir=/var/lib/mysql"]
