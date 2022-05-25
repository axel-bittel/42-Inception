FROM debian:buster
RUN apt-get update && apt-get install -y mariadb-server

COPY ./conf/50-server.cnf /etc/mysql/mariadb.cond.d/
COPY ./tools/configure.sql /tmp/

RUN service mysql start && mysql < /tmp/configure.sql
EXPOSE 3306
CMD ["mysqld"]
