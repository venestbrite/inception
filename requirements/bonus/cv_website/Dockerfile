FROM debian:buster

RUN apt update

RUN apt upgrade -y

RUN apt install wget -y

RUN	apt install -y nginx

RUN apt install unzip -y

RUN wget https://www.adminer.org/latest-mysql-en.php

RUN			echo "daemon off;" >> /etc/nginx/nginx.conf

# RUN mv latest-mysql-en.php /var/www/wp_site/

COPY start.sh ./start.sh

COPY cv_website.zip ./cv_website.zip

RUN chmod 777 start.sh 

ENTRYPOINT ./start.sh
