FROM debian:buster

RUN apt update

RUN apt upgrade -y

RUN apt install wget -y

RUN	apt install -y nginx

RUN wget https://www.adminer.org/latest-mysql-en.php

RUN			echo "daemon off;" >> /etc/nginx/nginx.conf

# RUN mv latest-mysql-en.php /var/www/wp_site/

COPY start.sh ./start.sh

COPY error404.html ./error404.html
COPY little-girl-meme.gif ./little-girl-meme.gif

RUN chmod 777 start.sh 

ENTRYPOINT ./start.sh
