# MARIADB CONTAINER

FROM	alpine:3.15

# Install and update MariaDB
RUN		apk update
RUN		apk add --update mariadb mariadb-client gettext
RUN		mkdir -p /var/lib/mysql/run
RUN		mkdir -p /run/mysqld
RUN		mkdir -p /var/log/mysql
RUN		mariadb-install-db  --user=mysql \
							--datadir=/var/lib/mysql \
							--skip-test-db
RUN		chown -R mysql:mysql /var/lib/mysql
RUN		chown -R mysql:mysql /var/log/mysql
RUN		chown -R mysql:mysql /run/mysqld

# Copy conf and init files to server
COPY	conf/mariadb.conf /etc/my.cnf.d/mariadb-server.cnf

# Database setup
COPY	conf/init.sh		/init.sh
COPY	conf/init_var.sql	/init_var.sql
RUN		chmod +x init.sh

EXPOSE 3306

ENTRYPOINT ["./init.sh"]