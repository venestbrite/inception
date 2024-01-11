FROM	alpine

EXPOSE	3306

RUN		apk add --update
RUN		apk add mysql mysql-client

COPY	 init_file my.cnf ./


RUN     mkdir /run/mysqld
RUN		mv my.cnf /etc/

COPY    setup.sh    ./setup.sh
COPY	wordpress.sql ./wordpress.sql
# COPY    staff.sh    ./staff.sh

RUN		chmod 755 ./setup.sh
# RUN		chmod 755 ./staff.sh

ENTRYPOINT		./setup.sh

# FROM debian:buster

# RUN apt update && apt upgrade

# RUN apt install mariadb-server -y 

# RUN     mkdir /run/mysqld
# COPY 	my.cnf /etc/

# COPY    setup.sh    ./setup.sh
# # COPY    staff.sh    ./staff.sh

# RUN		chmod 755 ./setup.sh

# ENTRYPOINT		./setup.sh

