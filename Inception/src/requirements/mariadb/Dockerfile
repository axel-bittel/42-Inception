FROM debian:buster
RUN apt-get update && apt-get install -y mariadb-server mariadb-client

EXPOSE 3306

COPY ./conf/50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf
COPY ./tools/configure.sql /tmp/configure.sql
COPY ./tools/db.sql /tmp/db.sql

RUN mysql_install_db --user=mysql --basedir=/usr --datadir=/var/lib/mysql
RUN service mysql start && mysql < /tmp/configure.sql && mysql < /tmp/db.sql

CMD ["mysqld", "-user=root --datadir=/var/lib/mysql"]
#CMD ["mariadb", ""]
