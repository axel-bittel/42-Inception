FROM debian:buster
RUN apt-get update && apt-get install -y mariadb-server mariadb-client

EXPOSE 3306

COPY ./conf/50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf
COPY ./tools/configure.sql /tmp/configure.sql

RUN service mysql start && mysql < /tmp/configure.sql

CMD ["mysqld", "-user=root --datadir=/var/lib/mysql"]
#CMD ["mariadb", ""]
